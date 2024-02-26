/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  "./resources/**/**/**/**/*.blade.php"],
  daisyui: {
    themes: [ {
        scoutbsalight: {
      "scout_blue_light": "#9AB3D5",
      "scout_blue_dark": "#003366",
      "scout_blue": "#003F87",
      "scout_red": "#CE1126",
      "scout_tan": "#D6CEBD",
      "scout_tan_light": "#E9E9E4",
      "scout_tan_dark": "#AD9D78",
      "scout_gray": "#515354",
      "scout_gray_light": "#858787",
      "scout_gray_dark": "#232528",
      "primary": "#003F87",
      "primary-content": "#ffffff",
      "secondary": "#9AB3D5",
      "accent": "#CE1126",
      "base-100": "#E9E9E4",
      "base-200": "#D6CEBD",
        },
    },
    ]
  },
    extend: {},
  plugins: [require("daisyui")],
}

