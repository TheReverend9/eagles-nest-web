/** @type {import('tailwindcss').Config} */
import daisyui from 'daisyui'
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./resources/**/**/**/**/*.blade.php"],
  theme: {
    extend: {
      colors: {
        cardbg: "var(--cardbg)",
      }
    },
  },
  daisyui: {
    themes: [ {
        scoutbsalight: {
          //Scout Colors Custom
          "--scout-blue-light": "#9AB3D5",
          "--scout-blue-dark": "#003366",
          "--scout-blue": "#003F87",
          "--scout-red": "#CE1126",
          "--scout-tan": "#D6CEBD",
          "--scout-tan-light": "#E9E9E4",
          "--scout-tan-dark": "#AD9D78",
          "--scout-gray": "#515354",
          "--scout-gray-light": "#858787",
          "--scout-gray-dark": "#232528",
          //Other Custom Colors
          "--cardbg": "#e6e1d7",
          "primary": "#003F87",
          "primary-content": "#ffffff",
          "secondary": "#9AB3D5",
          "accent": "#CE1126",
          "base-100": "#E9E9E4",
          "base-200": "#D6CEBD",
          "base-300": "#AD9D78",
        },
    },
    ]
  },
    extend: {
      colors: {
      },
    },
  plugins: [daisyui],
}

