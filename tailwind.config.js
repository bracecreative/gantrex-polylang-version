module.exports = {
    content: ['**/*.php', './safelist.html'],
    theme: {

        fontFamily: {},
        extend: {
            transitionProperty: {
                height: 'height',
                spacing: 'margin, padding'
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                primary: {
                    DEFAULT: '#0B2B42'
                },
                secondary: {
                    DEFAULT: '#3091D9'
                },
                accent: {
                    DEFAULT: '#E96500'
                },
                white: {
                    DEFAULT: '#FFFFFF'
                },
                black: {
                    DEFAULT: '#000000'
                },
                light: {
                    DEFAULT: '#F8F8F8'
                },
                dark: {
                    DEFAULT: '#303030'
                },
                blue: {
                    300: '#3693d6',
                    900: '#003145'
                },
                gray: {
                    50: '#F5F5F5'
                },
                orange: {
                    700: 'FF6319'
                }
            }
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/typography'),
        require('tailwind-scrollbar-hide')
    ]
};