import path from "path";
// import {defineConfig, splitVendorChunkPlugin } from 'vite';
import { defineConfig } from "vite";
const root = "src";

// plugins
//- html 작성을 도와주는 PUG JS를 vite에서 사용할 수 있도록 해 주는 플러그인
import pugPlugin from "vite-plugin-pug";
// import { dynamicBase } from 'vite-plugin-dynamic-base';
export default defineConfig(({ command, mode }) => {
  // mode = production || development
  return {
    // build specific config
    //publicDir: '../public', // font, image등 저장하는 디렉토리
    base: "/",
    root: root,
    plugins: [
      pugPlugin(
        { pretty: true },
        { build: command === "build" ? true : false }
      ),
    ],
    build: {
      emptyOutDir: true,
      outDir: "../root/assets",
      // manifest: true,
      // ssrManifest: true,
      // 모듈 프리로드 폴리필 가져오지 않도록 변경
      // https://vitejs-kr.github.io/config/#build-polyfillmodulepreload
      polyfillModulePreload: false,
      // cssCodeSplit: false,
      cssTarget: "chrome61", // Vite가 Color를 #RGBA 로 변환하는것을 막기 위함 (Android Wecchat webview에서 지원하지 않음)
      // sourcemap: true,
      minify: true,
      watch: {
        // https://rollupjs.org/guide/en/#watch-options
      },
      rollupOptions: {
        // https://rollupjs.org/guide/en/#big-list-of-options
        // input: {
        //     'index' : './html/index.pug',
        // },
        input: require("fast-glob")
          .sync(["./src/js/*.js", "./src/css/*.scss", "!dist", "!node_modules"])
          .map((entry) => path.resolve(__dirname, entry)),
        output: {
          compact: true,
          chunkFileNames: (chunkInfo) => {
            console.log("chunkFileNames", chunkInfo);
            return "js/[name].js";
          },
          entryFileNames: (fileInfo) => {
            // html과 js가 동일한 이름을 갖는 경우, js 의 이름이 index3.js와 같이 변경되는 것을 방지...
            let extType = fileInfo.facadeModuleId.split(".").at(1);
            console.log("! entryFileNames !", fileInfo.facadeModuleId);
            if (extType == "js") return "js/[name].js";
            // else if(extType == 'sass') return 'assets/css/[name].css';
            else return "[name]";
          },
          assetFileNames: (assetInfo) => {
            let extType = assetInfo.name.split(".").at(1);
            console.log("! assetFileNames !", assetInfo.name);
            if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
              extType = "img";
            }
            return `${extType}/[name][extname]`;
          },
        },
      },
    },
  };
});
