<template>
    <!-- head情報
      <Helmet>
        <title>MIR_Rev.｜配布ゲーム一覧</title>
        <meta name="description" content="制作したゲームソフトの一覧ページです。無料で配布されているゲームソフトもあります。"></meta>
        <link rel="canonical" href={ APP_URL + "/game" } /> 
      </Helmet> -->
    
    <!-- メインコンテンツ -->
    <div class="main-window__wrap">
        <div class="main-window__inner">
    
            <!-- ゲームリストの表示 -->
            <ul>
                <li v-for="game in games" class="game__item-wrap">
                    <a class="game__item-image image-link gtm-game_link" :href="game.link_path" :data-gtm="game.name">
                        <img :src="game.thumbnail_path" />
                    </a>
                    <div class="game__item-text-wrap">
                    <a class="game__item-title text-link gtm-game_link" :href="game.link_path" :data-gtm="game.name">
                        {{ game.name }}({{ game.game_status_name }})
                    </a>
                    <div class="game__item-caption">
                        {{ game.description }}
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- 戻るボタン -->
    <PreviousButton />
</template>


<script>
    import {usePage} from "@inertiajs/inertia-vue3";
    import PreviousButton from "../Components/PreviousButton.vue";
    export default{

        //コンポーネント内で使用する変数
        data() {
            return {
                games: usePage().props.value.games,
            };
        },

        //ファイル内で使用するコンポーネント
        components: {
            PreviousButton,
        },
    }
</script>


<style lang="scss" scoped>
    @import "../../sass/_variable";
    .game {
        &__item-wrap {
            margin-bottom: 40px;
            @media screen and (min-width: $break_point) {
                display: flex;
                align-items: center;
            }
            &:last-child {
                margin-bottom: 0;
            }
        }
        &__item-image {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 272px;
            @media screen and (min-width: $break_point) {
                width: 234px;
            }
        }
        &__item-text-wrap {
            width: 96%;
            margin: 4px auto 0;
            @media screen and (min-width: $break_point) {
                width: calc(100% - 234px);
                margin: 0;
            }
        }
        &__item-title {
            display: block;
            font-weight: bold;
            font-size: 16px;
            @media screen and (min-width: $break_point) {
                margin-left: 10px;
                font-size: 17px;
            }
        }
        &__item-caption {
            color: #222;
            margin: 6px 0 0 6px;
            font-size: 15px;
            text-align: justify;
            @media screen and (min-width: $break_point) {
                margin: 4px 0 0 24px;
                font-size: 15px;
            }
        }
    }
</style>
