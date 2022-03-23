const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            keyframes: {
                'fade-in-left': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateX(-30px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateX(0)'
                    },
                },
                'fade-in-right': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateX(30px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateX(0)'
                    },
                },
                'fade-in-up': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    },
                },
            },

            animation: {
                'fade-in-left' : 'fade-in-left 1.5s ease-out',
                'fade-in-right' : 'fade-in-right 1.5s ease-out',
            },

            padding: {
                '1/3': '33.33333%',
                '2/3': '66.66666%',
            },

        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
        animation: ["motion-safe"],
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio')],
};
