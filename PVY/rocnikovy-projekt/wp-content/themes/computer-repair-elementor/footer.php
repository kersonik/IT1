<footer class="bg-dark text-light py-4"> <!-- Footer section with dark background and light text -->
    <div class="container text-center"> <!-- Center-aligned content within a Bootstrap container -->
        <p>
            <?php 
            // Display dynamic copyright year
            echo esc_html__('Copyright', 'computer-repair-elementor') . ' &copy; ' . date('Y') . ' | ';

            // Display translatable "All Rights Reserved" text
            esc_html_e('All Rights Reserved', 'computer-repair-elementor'); 
            ?>

            <?php 
            // Get the footer credit text from the theme customizer with a default translatable fallback
            $computer_repair_elementor_footer_credit = get_theme_mod(
                'footer_credit', 
                sprintf(
                    esc_html__('Design By: %s', 'computer-repair-elementor'),
                    '<a href="https://webxthemes.com/" target="_blank" class="text-light">Patrickoslo</a>'
                )
            );

            // Output the footer credit with allowed HTML tags for security
            echo wp_kses_post($computer_repair_elementor_footer_credit); 
            ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?> <!-- WordPress function to include necessary footer scripts and hooks -->

</body>
</html>
