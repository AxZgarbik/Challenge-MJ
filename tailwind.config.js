const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'custom-dark': '#020024', // Mantén tus colores personalizados si aún los necesitas
                'custom-mid': '#2b2b41',
                'custom-light': '#00efff',
                'gradient-start': '#323de3', // Nuevo color de inicio del gradiente
                'gradient-end': '#94bbe9', // Nuevo color de fin del gradiente
            },
            backgroundImage: {
                'custom-gradient': 'radial-gradient(circle, rgba(50,61,227,1) 0%, rgba(148,187,233,1) 100%)',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],

};
