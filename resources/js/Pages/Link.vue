<template>
    <!-- head情報
      <Helmet>
        <title>MIR_Rev.｜おすすめリンク</title>
        <meta name="description" content="お友達のリンクや、ゲーム制作に便利な素材サイトなどのリンク集です。"></meta>
        <link rel="canonical" href={ APP_URL + "/link" } /> 
      </Helmet> -->
    
    <!-- メインコンテンツ -->
    <div class="main-window__wrap">
        <div class="main-window__inner">

            <!-- リンク一覧 -->
            <div v-for="link_type in link_types" class="link__wrap">

                <!-- リンクの種類名 -->
                <h2 class="link__h2">{{ link_type.name }}</h2>

                <!-- リンク詳細 -->
                <ul>
                    <li v-for="link in link_type.links" class="link__item-wrap">
                        <a class="link__item-image image-link" :href="link.link_url" target="blank">
                            <img :src="link.thumbnail_path" />
                        </a>
                        <div class="link__item-text-wrap">
                            <a class="link__item-name text-link" :href="link.link_url" target="blank">
                                {{ link.name }}
                            </a>
                            <div class="link__item-caption">
                                {{ link.description }}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- リンクについて -->
            <div class="link__wrap">
                <h2 class="link__h2">当サイトへのリンクについて</h2>
                <div class="link__announce">
                    当サイトはリンクフリーです。<br class="sp-only" />バナーは以下の物をお使いください。
                </div>
                <div class="link__banner">
                    <img src="/image/banner1.jpg" />
                    <img src="/image/banner2.jpg" />
                    <img src="/image/banner3.jpg" />
                </div>
            </div>
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
                link_types: usePage().props.value.link_types,
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
    .link {
        &__wrap {
            margin-top: 30px;
            &:first-child {
                margin-top: 0px;
            }  
        }
        &__h2 {
            text-align: center;
            padding: 8px 0;
            margin-bottom: 16px;
            border: dashed #383838;
            border-width: 1px 0px;
            color: #383838;
        }
        &__item-wrap {
            padding: 12px 8px;
            margin: 0px 0;
            background-color: #fff;
            &:nth-child(odd) {
                background-color: #f0e4df;
            }
            @media screen and (min-width: $break_point) {
                display: flex;
                align-items: center;
            }
        }
        &__item-image {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 272px;
            height: 52px;
            @media screen and (min-width: $break_point) {
                width: 234px;
                height: 60px;
            }
            img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }
        }
        &__item-text-wrap {
            width: 96%;
            margin: 6px auto 0;
            @media screen and (min-width: $break_point) {
                width: calc(100% - 234px);
                margin: 0;
            }
        }
        &__item-name {
            display: block;
            font-weight: bold;
            font-size: 15px;
            @media screen and (min-width: $break_point) {
                margin-left: 10px;
                font-size: 15px;
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
        &__announce {
            font-size: 15px;
            text-align: center;
        }
        &__banner {
            margin: 20px 0 10px;
            text-align: center;
            img {
                display: block;
                width: 200px;
                height: 40px;
                margin: 0 auto 12px;
                @media screen and (min-width: $break_point) {
                    display: inline;
                    margin: 0 6px;
                }
            }
        }
    }
</style>