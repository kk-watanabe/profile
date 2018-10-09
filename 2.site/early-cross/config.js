var base = {
  dir  : 'httpdocs/',
  ast  : 'httpdocs/assets/',
  edit : 'src/',
};

var setting = {
  autoprefixer: {
      browser: ['last 2 versions']
  },
  browserSync: {
    // 使わない方はコメントアウトする
    proxy: 'core.ce',
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
      src: base.edit + 'sass/**/*.scss',
      dest: base.ast + 'css/',
    },
    js: {
      src: base.edit + 'js/',
      dest: base.ast + 'js/',
    },
    image: {
      src: base.edit + 'img/**/*',
      dest: base.ast + 'img/',
    },
    json: {
      src: base.edit + 'json/*.json'
    },
    svg: {
      src: base.edit + 'svg/*.svg'
    },
    include: {
      src: [base.edit + 'inc/**/*'],
      dest: base.ast + 'inc/',
    },
    pdf: {
      src: [base.edit + 'pdf/**/*'],
      dest: base.ast + 'pdf/',
    },
    movie: {
      src: [base.edit + 'movie/**/*'],
      dest: base.ast + 'movie/',
    },
  }
};
module.exports = {
  base: base,
  setting: setting
}
