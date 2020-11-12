module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
        screens: {
            'dark': {'raw': '(prefers-color-scheme: dark)'},
            'light': { raw: '(prefers-color-scheme: light)' },
        },
    },
  },
  variants: {},
  plugins: [],
}
