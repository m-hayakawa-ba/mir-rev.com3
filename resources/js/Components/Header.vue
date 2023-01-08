<template>
    <header class="header background-pattern">
        <div class="header__content">
  
        <!-- サークルロゴ -->
        <Link :href="route('index')" class="header__logo image-link">
            <div>
                <img src="/image/circlelogo.png" />
            </div>
        </Link>

        <!-- 各種リンクボタン -->
        <Link :href="route('game')" class="header__link image-link">
            <div>
                ゲーム
            </div>
        </Link>
        <Link :href="route('link')" class="header__link image-link">
            <div>
                リンク
            </div>
        </Link>
        <a href="https://tirliss.wordpress.com/" class="header__link image-link" target="blank">
            <div>
                ブログ
            </div>
        </a>
        <a href="https://ws.formzu.net/fgen/S27906946/" class="header__link image-link" target="blank">
            <div>
                ご連絡
            </div>
        </a>

        </div>
    </header>
</template>


<script>
import { Link } from "@inertiajs/inertia-vue3";
export default{

    //ファイル内で使用するコンポーネント
    components: {
        Link,
    },
    
};
</script>


<style lang="scss" scoped>
    @import "../../sass/_variable";
    .header {
        width: 100%;
        &__content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-bottom: 8px;
            @media screen and (min-width: $break_point) {
                margin: 0 auto;
                padding-top: 20px;
                padding-bottom: 24px;
                width: 880px;
            }
        }

        &__logo {
            margin: 16px 0 8px;
            width: 100%;
            text-align: center;
            img {
                max-width: 248px;
            }
            @media screen and (min-width: $break_point) {
                margin: 0 32px 0 0;
                padding: 0;
                width: 248px;
            }
        }

        &__link {
            margin: 0px 6px 12px;
            padding: 7px 0px 4px;
            width: 64px;
            background: linear-gradient(#fbd6a7, #f5ab4c);
            text-align: center;
            outline: solid 1px #f8c079;
            outline-offset: 2px;
            color: #fff;
            text-shadow:
            1px  1px 2px #441a0a,
            -1px -1px 2px #441a0a,
            -1px  1px 2px #441a0a,
            1px -1px 2px #441a0a,
            1px  0px 2px #441a0a,
            -1px  0px 2px #441a0a,
            0px  1px 2px #441a0a,
            0px -1px 2px #441a0a;
            @media screen and (min-width: $break_point) {
                margin: 40px 8px 0;
                width: 130px;
            }
        }
    }
</style>