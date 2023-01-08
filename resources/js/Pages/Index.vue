<template>

    <!-- HEAD情報 -->
    <Head>
        <title>MIR_Revision 同人ゲームを作ったり配布したりしてるサイトです ^ν^</title>
        <meta head-key="description" name="description" content="同人ゲームサークル MIR_Revision のホームページです。アクションＲＰＧやパズルゲームの開発・販売・配布を行っています。" />
        <link rel="canonical" :href="route('index')" /> 
    </Head>

    <!-- プリンセスシェイド リビジョン 紹介 -->
    <a class="index__psr-wrap image-link gtm-game_link" href="/game_psr" data-gtm="プリンセスシェイド リビジョン">
        <div>
            <img src="/image/psr.jpg" alt="プリンセスシェイド バナー画像" />
        </div>
        <div class="index__psr-caption">
            弾幕アクションＲＰＧ 第二弾！<br />
            「プリンセスシェイド リビジョン」<br class="sp-only" />開発中です！！！
        </div>
    </a>

    <!-- ティルキッス 紹介 -->
    <div class="index__tir-wrap">
        <div class="index__tir-movie">
            <iframe loading="lazy" src="https://www.youtube.com/embed/LQeSjsx3N5s" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
        </div>
    </div>
    <div class="index__tir-caption">
        <a href="/" class="text-link gtm-game_link" data-gtm="ティルキッス ～Princess Shade～">
            弾幕アクションＲＰＧ 第一弾！<br />
            「ティルキッス ～Princess Shade～」<br class="sp-only" />フリーソフト配布中！
        </a>
    </div>

    <!-- ゲーム紹介とサイト情報・更新履歴 -->
    <div class="index__2column">

        <!-- サイト情報と更新履歴 -->
        <div class="index__1st-column">
            <div class="index__content-title">● サイト情報 ●</div>
            <div class="index__content-main index__information mb20">
                <div class="index__information__iamge">
                    <img src="/image/mir.jpg" alt="管理人MIR イメージ画像" />
                </div>
                <div>
                    <div class="index__information__caption">
                        <span>管理人 ＭＩＲ</span><br />
                        <Link :href="route('profile')" class="text-link">・プロフィール</Link><br />
                        <a href="https://ws.formzu.net/fgen/S27906946/" class="text-link" target="blank">・連絡先</a>
                    </div>
                </div>
            </div>
            <div class="index__content-title">● 更新履歴 ●</div>
            <div class="index__content-main mb20">
                <ul>
                    <li v-for="history in histories">
                        <div class="index__history">
                            <span>{{ format(history.created_at) }}</span>
                            <p v-html="history.content"></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ゲーム紹介 -->
        <div class="index__2nd-column">
            <div class="index__content-title">● ゲームコンテンツ ●</div>
            <div class="index__content-main">
                <ul>
                    <li v-for="game in games" class="index__item-wrap">
                        <a class="index__item-image image-link gtm-game_link" :href="game.link_path" :data-gtm="game.name">
                            <img :src="game.thumbnail_path" :alt="game.name" />
                        </a>
                        <div class="index__item-text-wrap">
                        <a class="index__item-title text-link gtm-game_link" :href="game.link_path" :data-gtm="game.name">
                            {{ game.name }}
                        </a>
                        <div class="index__item-caption">
                            {{ game.description }}
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>


<script>
    import {usePage, Head} from "@inertiajs/inertia-vue3";
    import { Link } from "@inertiajs/inertia-vue3";
    import moment from 'moment';
    export default{

        //コンポーネント内で使用する変数
        data() {
            return {
                games:     usePage().props.value.games,
                histories: usePage().props.value.histories,
            };
        },

        //ファイル内で使用するコンポーネント
        components: {
            Head,
            Link,
        },

        //コンポーネント内で使用するメソッド
        methods: {
            format(date) {
                return moment(date).format('YYYY年M月D日')
            }
        }
    }
</script>


<style lang="scss" scoped>
    @import "../../sass/_variable";
    .index {
        &__psr-wrap {
            display: block;
            width: 98%;
            margin: 0 auto;
            @media screen and (min-width: $break_point) {
                width: 832px;
            }
        }
        &__psr-caption {
            margin-top: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 1.2;
            @media screen and (min-width: $break_point) {
                font-size: 24px;
            }
        }
        &__tir-wrap {
            margin: 20px auto 0;
            width: 84%;
            @media screen and (min-width: $break_point) {
                margin-top: 50px;
            }
        }
        &__tir-movie {
            position: relative;
            margin: 0 auto;
            width: 100%;
            padding-top: 75%;
            @media screen and (min-width: $break_point) {
                width: 480px;
                padding-top: 0;
            }
            iframe {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            @media screen and (min-width: $break_point) {
                position: relative;
                width: 480px;
                height: 360px;
            }
            }
        }
        &__tir-caption {
            margin-top: 8px;
            text-align: center;
            font-size: 16px;
            line-height: 1.2;
            @media screen and (min-width: $break_point) {
                font-size: 24px;
            }
        }
        &__2column {
            display: block;
            justify-content: center;
            margin-top: 20px;
            @media screen and (min-width: $break_point) {
                display: flex;
                flex-direction: row-reverse;
                margin-top: 60px;
            }
        }
        &__1st-column {
            margin: 0 4% 8px;
            width: 92%;
            @media screen and (min-width: $break_point) {
                margin: 0 16px;
                width: 288px;
            }
        }
        &__2nd-column {
            margin: 0 4% 0;
            width: 92%;
            @media screen and (min-width: $break_point) {
                margin: 0 16px;
                width: 600px;
            }
        }
        &__content-title {
            padding: 8px 0 4px;
            border-bottom: solid 1px #fff;
            border-radius: 8px 8px 0 0;
            box-shadow: 1px 1px 2px #1d0e08;
            text-align: center;
            color: #fff;
            font-size: 14px;
            text-shadow: 1px 1px 1px #140f23;
            background: linear-gradient(#8281cf, #494db9);
        }
        &__content-main {
            padding: 12px;
            border: solid 4px #494db9;
            border-radius: 0 0 8px 8px;
            box-shadow: 1px 1px 2px #1d0e08;
            background-color: #fff;
        }
        &__information {
            display: flex;
            justify-content: space-evenly;
            &__image {
                width: 108px;
                height: 108px;
            }
            &__caption {
                padding-top: 10px;
                span {
                    margin-left: 8px;
                    font-weight: bold;
                    line-height: 2.5;
                }
                a {
                    margin-left: 12px;  
                    font-weight: bold;
                    line-height: 1.4;
                }
            }
        }
        &__history {
            span {
                font-weight: bold;
                font-size: 15px;
            }
            p {
                font-size: 15px;
                margin: 10px 0 24px;
                white-space: pre;
            }
        }
        
        &__item-wrap {
            margin-bottom: 25px;
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
            }
        }
        &__item-caption {
            color: #222;
            margin: 6px 0 0 6px;
            font-size: 15px;
            text-align: justify;
            @media screen and (min-width: $break_point) {
                margin: 4px 0 0 16px;
                font-size: 15px;
            }
        }
    }
</style>
