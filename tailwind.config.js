/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        },
        colors: {
            'primary': '#0a2444',
            'secondary': '#103461'
        },

    },
  },
  plugins: [],
}

