module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                '3xl': '2000px',
                // => @media (min-width: 2000px) { ... }
            },
            backgroundImage: theme => ({
                'hero-pattern': "url('../../imgs/flag.png')",
                'hero-flag': "url('../../imgs/hero-flag.svg')",
                'flag-uae': "url('../../imgs/flag-uae.png')",
                'tm': "url('../../imgs/bgtesti.svg')",
                's1': "url('../../imgs/s1.jpg')",
                's2': "url('../../imgs/s2.jpg')",
                'leftwaves': "url('../../imgs/sl.svg')",
                'rightwaves': "url('../../imgs/sr.svg')",
                'blue-waves': "url('../../imgs/blue-waves.svg')",
                // old images
                'hero-pattern': "url('../../imgs/hero-pattern.svg')",
                'wave-1': "url('../../imgs/wave-1.svg')",
                'wave-2': "url('../../imgs/wave-2.svg')",
                'top-wave': "url('../../imgs/top-wave.svg')",
                'bottom-wave': "url('../../imgs/bottom-wave.svg')",
                'animate-wave-1': "url('../../imgs/animate-wave-1.svg')",
                'bg-wave': "url('../../imgs/bg-wave.svg')",
            }),
            colors: {
                'primary-light': '#15CEF4',
                'primary-dark': '#3859B5',
                'secondary': '#43464C',
                'secondary-dark': '#2C2E32',
            },
            keyframes: {
                wiggle: {
                    '0%, 100%': { transform: 'rotate(-5deg)' },
                    '50%': { transform: 'rotate(5deg)' },
                }
            },
            animation: {
                'bounce': 'bounce 1s infinite',
                'spin-slow': 'spin 7s linear infinite',
                'wiggle': 'wiggle 3s ease-in-out infinite',
                'wiggle-slow': 'wiggle 1s ease-in-out infinite',
            }
        },
        plugins: [],
    }
}
