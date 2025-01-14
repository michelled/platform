// eslint-disable-next-line no-unused-vars
const {Config} = require("tailwindcss");

/**
 * @type {Config} config
 **/
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        colors: {
            black: "#000",
            white: "#fff",
            "graphite-8": "#2b2e38",
            "graphite-7": "#3f424c",
            "graphite-6": "#4b5560",
            "graphite-5": "#637180",
            "graphite-4": "#667584",
            "grey-3": "#d9dce3",
            "grey-2": "#eaedf3",
            "grey-1": "#f8fafd",
            "blue-8": "#0f1138",
            "blue-7": "#26296a",
            "blue-6": "#3842aa",
            "blue-5": "#7077CB",
            "green-5": "#00aea9",
            "green-2": "#92e5e3",
            "green-1": "#bfe2e1",
            "turquoise-5": "#00b9d6",
            "turquoise-2": "#7de2f4",
            "turquoise-1": "#c6f4fe",
            "lavender-3": "#cab6d9",
            "lavender-2": "#eecef0",
            "magenta-3": "#f16e9d",
            "magenta-2": "#ffa0ce",
            "yellow-3": "#f5dc62",
            "yellow-2": "#fce88b",
            "yellow-1": "#ebedbb",
            "red-9": "#691616",
            "red-8": "#922020",
            "red-2": "#f6a7a7",
            "red-1": "#f5cdcd"
        },
        fontFamily: {
            base: ["\"Open Sans\"", "sans-serif"],
            display: ["montserrat", "sans-serif"]
        },
        fontSize: {
            "fluid-lg": "clamp(1.125rem, 0.8929vw + 0.6964rem, 1.5rem)",
            "fluid-xl": "clamp(1.25rem, 1.7857vw + 0.3929rem, 2rem)",
            "fluid-2xl": "clamp(1.75rem, 2.9762vw + 0.3214rem, 3rem)",
            "fluid-3xl": "clamp(2.5rem, 4.7619vw + 0.2143rem, 4.5rem)",
            xs: ["0.75rem", { lineHeight: "1.5" }],
            sm: ["0.875rem", { lineHeight: "1.5" }],
            base: ["1rem", { lineHeight: "1.5" }],
            lg: ["1.1rem", { lineHeight: "1.5" }],
            xl: ["1.25rem", { lineHeight: "1.5" }],
            "2xl": ["1.5rem", { lineHeight: "1.4" }],
            "3xl": ["2rem", { lineHeight: "1.4" }],
            "4xl": ["2.5rem", { lineHeight: "1.4" }],
            "5xl": ["3rem", { lineHeight: "1" }],
            "6xl": ["3.75rem", { lineHeight: "1" }],
            "7xl": ["4.5rem", { lineHeight: "1" }]
        },
        fontWeight: {
            thin: "100",
            extralight: "200",
            light: "300",
            normal: "400",
            medium: "500",
            semibold: "600",
            bold: "700",
            extrabold: "800",
            black: "900"
        },
        borderWidth: {
            DEFAULT: "1px",
            0: "0",
            2: "2px",
            3: "3px",
            4: "4px",
            8: "8px"
        },
        borderRadius: {
            none: "0",
            xs: "0.0625rem",
            sm: "0.125rem",
            DEFAULT: "0.25rem",
            md: "0.375rem",
            lg: "0.5rem",
            xl: "0.75rem",
            "2xl": "1rem",
            "3xl": "1.5rem",
            full: "9999px"
        },
        maxWidth: {
            prose: "70ch"
        },
        spacing: {
            px: "1px",
            0: "0",
            0.5: "0.125rem",
            1: "0.25rem",
            1.5: "0.375rem",
            2: "0.5rem",
            2.5: "0.625rem",
            3: "0.75rem",
            3.5: "0.875rem",
            4: "1rem",
            5: "1.25rem",
            6: "1.5rem",
            7: "1.75rem",
            8: "2rem",
            9: "2.25rem",
            10: "2.5rem",
            11: "2.75rem",
            12: "3rem",
            14: "3.5rem",
            16: "4rem",
            20: "5rem",
            24: "6rem",
            28: "7rem",
            32: "8rem",
            36: "9rem",
            40: "10rem",
            44: "11rem",
            48: "12rem",
            52: "13rem",
            56: "14rem",
            60: "15rem",
            64: "16rem",
            72: "18rem",
            80: "20rem",
            96: "24rem"
        }
    },
    corePlugins: {
        preflight: false
    },
    plugins: []
};
