module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                'blue': '#243c5a',
            },
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@themesberg/flowbite/plugin')
    ]
}