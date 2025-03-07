const colors = require('tailwindcss/colors')

import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './../../resources/views/components/**/*.blade.php',
        './../../resources/views/frontend/**/*.blade.php',
        './../../resources/views/errors/**/*.blade.php',
        './../../resources/views/livewire/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Twemoji Country Flags"', 'var(--font-family)', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    darkMode: 'class',
    plugins: [
        require('daisyui'),
        require('@tailwindcss/typography'),
        require("tailwindcss-animate"),
    ],
    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    'neutral': '#ff00ff',
                    'neutral-content': '#00ff00',
                    'primary': '#0D0873',
                    'primary-content': '#ffffff',
                    'base-100': '#ffffff',
                    'base-content': "#000"
                },
            },
        ],
    },
}
