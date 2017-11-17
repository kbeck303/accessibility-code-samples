exports.config = {
  files: {
    javascripts: {
      joinTo: {}
    },
    stylesheets: {
      joinTo: {
        "styles.css": "src/scss/styles.scss"
      }
    },
  },
  paths: {
    watched: [
      "src/scss/"
    ],
    public: "src/css/"
  },
  plugins: {
    babel: {
      pattern: /\.(js|jsx)/
    }
  },
  modules: {
    nameCleaner: function (path) {
      return path.replace(/src\/js\//, '');
    }
  }
};
