/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                'inter':    ['Inter', 'sans-serif'],
                'playfair': ['Playfair Display', 'serif'],
                'grotesk':  ['Space Grotesk', 'sans-serif'],
            },
            colors: {
                'brand-black':      '#0A0A0A',
                'brand-dark':       '#111827',
                'brand-card':       '#1F2937',
                'brand-blue':       '#1E6BFF',
                'brand-blue-hover': '#1558D6',
                'brand-gold':       '#C9A84C',
                'brand-muted':      '#9CA3AF',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
