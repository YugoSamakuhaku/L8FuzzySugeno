/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    darkMode: ['class', '[data-mode="light"]'],
    content: [
        './app/Http/Livewire/**/*Table.php',
        './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
        './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
