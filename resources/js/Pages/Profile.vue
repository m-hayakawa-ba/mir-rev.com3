<template>
    <!-- head情報
      <Helmet>
        <title>MIR_Rev.｜管理人プロフィール</title>
        <meta name="description" content="管理人ＭＩＲのプロフィールと秘密です。"></meta>
        <link rel="canonical" href={ APP_URL + "/profile" } /> 
      </Helmet> -->
    
    <!-- メインコンテンツ -->
    <div class="main-window__wrap">
        <div class="main-window__inner">
            <div class="profile__wrap">

                <!-- 顔画像 -->
                <div class="profile__face">
                    <img src="/image/mir.jpg" alt="管理人MIR イメージ画像" />
                </div>

                <!-- 基本情報 -->
                <div class="profile__information">
                    <h2 class="profile__information__title">
                        管理人情報
                    </h2>
                    <div>
                        <span>名前</span>
                        <span>ＭＩＲ<br class="sp-only" />（えむあいあーる）</span>
                    </div>
                    <div>
                        <span>出身地</span>
                        <span>新潟県</span>
                    </div>
                    <div>
                        <span>主な派閥</span>
                        <span>猫派 ・ インドア派 ・ ビアンカ派</span>
                    </div>
                </div>

                <!-- ゲーム情報 -->
                <div class="profile__game">
                    <h2 class="profile__game__title">
                        ゲーム履歴
                    </h2>
                    <div>
                        <span>初めて買ってもらったゲーム</span>
                        <span>スーパーマリオブラザーズ２（ディスクシステム）</span>
                    </div>
                    <div>
                        <span>子供の頃好きだったゲーム</span>
                        <span>ファイアーエムブレム（ＦＣ）</span>
                    </div>
                    <div>
                        <span>性の目覚め</span>
                        <span>アイドル八犬伝（ＦＣ）</span>
                    </div>
                    <div>
                        <span>ハマった格ゲー</span>
                        <span>ヴァンパイアセイヴァー（アーケード）</span>
                    </div>
                    <div>
                        <span>シューターになったきっかけ</span>
                        <span>レイストーム（ＡＣ）</span>
                    </div>
                    <div>
                        <span>思い出の全一</span>
                        <span>斑鳩（ＡＣ）</span>
                    </div>
                    <div>
                        <span>大人になっても楽しめるゲーム</span>
                        <span>逆転裁判（ＧＢＡ）</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 戻るボタン -->
    <PreviousButton />
</template>


<script>
    import PreviousButton from "../Components/PreviousButton.vue";
    export default{

        //ファイル内で使用するコンポーネント
        components: {
            PreviousButton,
        },
    }
</script>


<style lang="scss" scoped>
    @import "../../sass/_variable";
    .profile {
        &__wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            text-align: justify;
        }
        &__face {
            width: 108px;
        }
        &__information {
            width: calc(100% - 108px);
            box-sizing: border-box;
            padding: 6px 4px;
            border-top: dashed 1px #383838;
            border-bottom: dashed 1px #383838;
            @media screen and (min-width: $break_point) {
                width: calc(96% - 108px);
                padding: 12px 12px;
            }
        }
        &__game {
            width: 100%;
            margin-top: 12px;
            @media screen and (min-width: $break_point) {
                margin-left: 26px;
            }
        }
        &__information, &__game {
            line-height: 1.6;
            &__title {
                font-weight: bold;
                margin-left: 0px;
                margin-bottom: 5px;
            }
            div {
                span:first-child {
                    font-weight: bold;
                    display: inline-block;
                    @media screen and (min-width: $break_point) {
                        margin-left: 24px;
                    }
                }
                span:nth-child(2) {
                    font-size: 14px;
                    @media screen and (min-width: $break_point) {
                        font-size: 16px;
                    }
                }
            }
        }
        &__information {
            div {
                span:first-child {
                    margin-right: 8px;
                    @media screen and (min-width: $break_point) {
                        margin-right: 0;
                        width: 96px;
                    }
                }
            }
        }
        &__game {
            div {
                span:first-child {
                    display: block;
                    @media screen and (min-width: $break_point) {
                    display: inline-block;
                        width: 256px;
                    }
                }
                span:nth-child(2) {
                    display: block;
                    margin: 0 0 12px 24px;
                    @media screen and (min-width: $break_point) {
                    display: inline;
                        margin: 0;
                    }
                }
            }
        }
    }
</style>