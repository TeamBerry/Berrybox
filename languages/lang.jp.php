<?php
/** 日本語 **/

$lang = array();
/** HOME **/
$lang["hello"] = "ベリボックスへようこそ！";
$lang["berrybox_description"] = "みんな一緒に、ベリボックスでビデオを見ましょう！";
$lang["get_started"] = "始まります";
$lang["home_create_room"] = "新しいルームを始まりたい？はい、このボタンをクリックしてください。";

/** ROOM ADMIN **/
$lang["room_join"] = "入ります";
$lang["room_create"] = "ルームを始まる";
$lang["active_room"] = "ライブ中のルーム";
$lang["room_name"] = "ルームの名前";
$lang["room_protection"] = "防御レベル";
$lang["level_private"] = "プライベート";
$lang["level_locked"] = "パスワードロック";
$lang["level_public"] = "パブリック";
$lang["private_tip"] = "このルームが目に見えませんになる。";
$lang["locked_tip"] = "このルームには、パスワードによるアクセスを持っている。";
$lang["public_tip"] = "誰もこのルームに入ることができるようになる。";
$lang["room_type"] = "ルームタイプ";
$lang["description_limit"] = "説明 〔300文字以下〕";
$lang["action_timeout"] = "このユーザーをミュートする。";
$lang["action_ban"] = "このルームからこのユーザーを禁止する。";
$lang["action_promote"] = "モデレーターにこのユーザーを促進する。";
$lang["action_demote"] = "このユーザーを降格する。";
$lang["timeout_message_admin_first_part"] = "このユーザは、ミュートされています (";
$lang["timeout_message_admin_second_part"] = " 回)";
$lang["timeout_message_user"] = "あなたはミュートされていました。次のメッセジを送信することができません。";
$lang["ignore_song"] = "この曲をスキップ";
$lang["song_up"] = "この曲を上に移動します";
$lang["song_down"] = "この曲を移動します";
$lang["close_room"] = "ルームを閉める";
$lang["close_room_tip"] = "ルームが占める割合は、ビデオ提出とプレイが無効にされます。そして5分後みんなは外にリダイレクトされます。このアクションは不可逆";
$lang["room_closing"] = "ルームは閉じています。あなたは外にリダイレクトされます。";
$lang["change_type"] = "ルームタイプを変更します";
$lang["song_submit_success"] = "あなたのビデオ曲は提出されました";
$lang["invalid_link"] = "あなたの提出したリンクは無効です。有効なリンクを提出してください。";
$lang["db_error"] = "エラーがありました。もう一度リンクを提出してください。";
$lang["skip"] = "ネクスト";
$lang["spam"] = "新しいメッセージを送信するには、少なくとも1秒お待ちください";

/** TOGGLES **/
$lang["play_type"] = "プレイタイプ";
$lang["play_type_tip"] = "「オートプレイ」ビデオが終わる時に、次のビデオが自動で始まります。「マニュアルプレイ」ビデオが終わる時に、あなたは「ネクスト」ボタンを押して、次のビデオが始まります。";
$lang["manual_play"] = "マニュアル";
$lang["auto_play"] = "オート";
$lang["submit_type"] = "ビデオ提出";
$lang["submit_type_tip"] = "もしビデオ提出が「モデレーターだけ」のセッティングにされましたら、ノーマルユーザーがビデオ提出することができません。";
$lang["submit_all"] = "みんな";
$lang["submit_mod"] = "モデレーターだけ";

/** CHAT **/
$lang["post_chat"] = "チャット";
$lang["chat_placeholder"] = "メッセージを送信";
$lang["chat_settings"] = "チャットとルーム設定";
$lang["color_pick"] = "ユーザー名の色";
$lang["welcome"] = "チャットルームへようこそ！ ビデオ曲を提出ために、YouTubeのリンクをプレイヤーの下に貼り付けます。";

/** MOOD **/
$lang["mood-question"] = "この曲、どう思う？";
$lang["like"] = "いいね！";
$lang["cry"] = "悲しい感じがする";
$lang["love"] = "ラブに考える";
$lang["intense"] = "興奮する！";
$lang["sleep"] = "落ち着く";
$lang["energy"] = "元気一杯！！！";

/** ROOM **/
$lang["youtube_message"] = "YouTubeのリンクを書きます";
$lang["submit_link"] = "提出する";
$lang["no_submit"] = "曲を提出するには、<a href='portal.php?lang=jp'>ログイン</a>または<a href='signup.php?lang=jp'>サインアップ</a>して下さい。";
$lang["no_chat"] = "メッセジを送受信するには、<a href='portal.php?lang=jp'>ログイン</a>または<a href='signup.php?lang=jp'>サインアップ</a>して下さい。";
$lang["room_admin"] = "ルームクリエイター";
$lang["room_mod"] = "ルームモデレータ";
$lang["now_playing"] = "プレイ中";
$lang["watch_count"] = "観衆カウント";
$lang["playlist"] = "プレイリスト";
$lang["sync-on"] = "シンク オン";
$lang["sync-off"] = "シンク　オフ";
$lang["ul_admin"] = "クリエイター";
$lang["ul_mods"] = "モデレーターズ";
$lang["ul_users"] = "リサナーズ";
$lang["sl_played"] = "過去";
$lang["sl_upcoming"] = "次";
$lang["synchronizing"] = "シンク中…　しばらくお待ちください。";
$lang["no_admin"] = "注意！このルームのクリエイターがいりません。シンクは不可能です。ビデオをシェアーするために、新しいルームを始めて下さい。";
$lang["whisper"] = "囁く";

/** ROOM TYPES **/
$lang["rt_music"] = "音楽";
$lang["rt_science"] = "科学";
$lang["rt_lol"] = "喜劇";
$lang["rt_sport"] = "スポーツ";
$lang["rt_game"] = "ゲーム";
$lang["rt_live"] = "生放送";
$lang["rt_misc"] = "雑多";

/** BUTTONS **/
$lang["back"] = "戻る";

/** ACTIONS **/
$lang["log_out"] = "ログアウト";
$lang["log_in"] = "ログイン";
$lang["sign_up"] = "サインアップ";
$lang["no_account"] = "アカウントがまだありません？";
$lang["already_account"] = "アカウントがあります？";
$lang["sing_up_here"] = "サインアップはこちら";
$lang["log_in_here"] = "ログインはこちら";

/** LANGUAGES **/
$lang["language_name"] = "言語";
$lang["lang_en"] = "English";
$lang["lang_jp"] = "日本語";
$lang["lang_fr"] = "Français";

/** MISCELLANOUS **/
$lang["username"] = "ユーザー名";
$lang["password"] = "パスワード";
$lang["pwd_confirm"] = "パスワードを確認して下さい。";
$lang["cancel"] = "キャンセル";
$lang["wrong_password"] = "間違いましたパスワード";
$lang["no_credentials"] = "あれ？あなたはログインしていませんように見えます。お願い、ルームにアクセスするには、ログインまたはサインアップしてください。";
$lang["follow_us"] = "ベリボックスのニュースはこちらです";
$lang["twitter"] = "ツイッター";

/** MENU **/
$lang["menu"] = "メインメニュー";
$lang["my_profile"] = "プロファイル";
$lang["public_profile"] = "パラメータ";
$lang["leave"] = "ルームを出ます";
$lang["warning_sync_admin"] = "注意！　シンクはあなたに基づいています。あなたはルームを出るとき、シンクが停止します。";
$lang["room_reopen"] = "再び開きます";
$lang["room_delete"] = "ルームを削除します";
$lang["status_open"] = "開店";
$lang["status_closed"] = "閉店";

/** PROFILE **/
$lang["profile_settings"] = "プロファイル設定";
$lang["profile_settings_tip"] = "ディスプレイ名、バイオとプロファイル画像をアップデートする。";
$lang["profile_history"] = "歴史";
$lang["profile_history_tip"] = "あなたの閉めたルーム。このルームが次の日曜日の午前１時００まで残りされます。";
$lang["display_name"] = "ディスプレイ名";
$lang["display_name_tip"] = "ディスプレイ名をカスタマイズします";
$lang["profile_picture"] = "プロファイル画像";
$lang["profile_picture_formats"] = "3MB上限. JPGとPNG形式は、サポートされています";
$lang["bio"] = "バイオ";
$lang["bio_tip"] = "あなたの事項商会〔400文字上限〕";
$lang["default_lang"] = "デフォールト言語";
$lang["lang_tip"] = "アプリのディスプレイ言語";
$lang["save_changes"] = "セイブ";
$lang["user_theme"] = "テーマ";
$lang["theme_tip"] = "ダークテーマとか、ライトテーマを選択します。";
$lang["dark"] = "ダーク";
$lang["light"] = "ライト";

/** OTHER PROFILE **/
$lang["no_bio"] = "このユーザーはバイオがない。";
$lang["rooms_created"] = "始まったルームの数";
$lang["songs_submitted"] = "プレイした曲の数";
$lang["total_views"] = "視聴者数";
$lang["opened_rooms"] = "ライブ中のルーム";
$lang["no_opened_rooms"] = "空";

/** BETA **/
$lang["beta_key"] = "アプリにアクセスするには、下記のベータキーを入力してください。";
$lang["beta_sign"] = "あなたがサインアップするなら、下記のベターキーを入力してください。";
?>
