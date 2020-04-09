var path = require('path');
module.exports = {
  entry: "../marketflux/js/script.js",
  output: {
    path: path.resolve(__dirname, "./"),
    filename: "script.js"
  },
  module: {
    loaders: [
     {
        loader: 'babel-loader',
        query: {
          presets: ['es2015']
        },
        test: /\.js$/,
        exclude: /node_modules/
     }
    ]
  }
}
