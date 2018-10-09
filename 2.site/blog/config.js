var base = {
  dir: 'httpdocs/',
  ast: 'httpdocs/assets/',
};

var setting = {
  autoprefixer: {
      browser: ['last 2 versions']
  },
  browserSync: {
    // 使わない方はコメントアウトする
    proxy: 'my-site.kz',
    // server:{
    //     baseDir: 'httpdocs',
    // },
  },
  imagemin: {
    disabled: false,  // falseでimageminを実行
    level: 7  // 圧縮率
  },

  path: {
    sass: {
      src: base.ast + 'sass/**/*.scss',
      dest: base.ast + 'css/',
    },
    js: {
      src: base.ast + 'script/',
      dest: base.ast + 'js/',
    },
    image: {
      src: base.ast + 'img/**/*',
      dest: base.ast + 'img/',
    },
  }
};
module.exports = {
  base: base,
  setting: setting
}
