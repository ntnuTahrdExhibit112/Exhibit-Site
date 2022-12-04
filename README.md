# Exhibit-Site
台師大科技系 112級畢業專題展 專展網站
## [TECH PUNK](https://ntnutechpunk112.ml)

## 開發者
### 專展網站架設及其他功能製作
許恆齊 [80113hunterhsu](https://github.com/80113hunterhsu)

### 線上展製作
陳威諺 [Williechen7414](https://github.com/Williechen7414)
陳致愷 [Jacobchen142](https://github.com/Jacobchen142)
許嘉恩 [ThatCoolPeanut](https://github.com/ThatCoolPeanut)

### 展場AR互動製作
呂睿華 [Amazingboy210](https://github.com/Amazingboy210)
蘇柏霖 [milkcrisp](https://github.com/milkcrisp)

## 採用套件
 - 專展網頁
     - 模板：[Gp - Free Multipurpose HTML Bootstrap Template](https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/)
     - 專展票選 倒數鐘：[CodePen](https://codepen.io/shshaw/pen/vKzoLL)
     - 專展票選 表單複選選單製作：[Select2](https://select2.org/)
     - 專展資訊總結 圖表製作：[Chart.js](https://www.chartjs.org/)
 - 線上展
     - [Artsteps](https://www.artsteps.com/)
 - 展場AR互動
     - [MindAR](https://github.com/hiukim/mind-ar-js/)

## 網站架構
### 頁首選單
 - 專展Logo：點擊可回到首頁
 - 各項功能及內容快速導覽
 - 社群專頁快速連結
### 首頁
 - 主視覺：由專展籌備小組之美編組製作
 - 贊助商跑馬燈：套件由網頁模版製作者提供
 - 專題票選快速連結及倒數/公告
 - 專展理念
 - 作品廊（專題製作成果）
 - 參觀資訊
 - 關於科技系
 - 聯絡我們（總籌資訊）
 - 留言板快速連結
### 專題票選
#### 觀眾可瀏覽區域
##### 倒數
 - 點擊首頁之“我要投票”按鈕，或選單中的“專題票選”後，將會導覽至此頁面
 - 若投票開始將會自動顯示“我要投票”按鈕
 - 目前已公布專題票選結果，進入此頁將自動跳轉至結果頁面
##### 一般觀眾投票
 - 叛軍ID（入場取得之編號）登入：登入後才可投票
 - 觀展回饋表單填寫及人氣獎項投票
 - 參加抽獎：填寫個人資訊
##### 112級學生投票
 - 叛軍號召者ID（學號）登入：登入後才可投票
 - 觀展回饋表單及人氣獎項投票
    - 觀展回饋表單較一般觀眾減少一些問題，但共用資料庫
    - 人氣獎項無法投給自己的組別，並共用資料庫
 - 參加抽獎：填寫個人資訊
    - 其中姓名已寫入至資料庫，可選擇是否更改，或直接送出不更改姓名
##### 人氣獎項投票結果
 - 於投票時間結束後（專展第二天 13:00）由網站管理者設定跳轉至此頁面
 - 因公宣組需手動統計其中一個獎項的人數，因此採手動設定
 - 公告各項獎項之前三名，且前三名高度以票數比例來自動調整顯示
#### 觀眾無法瀏覽區域
##### 抽獎
 - 於抽獎環節使用，輸入抽獎人數後即可得到中獎者資訊（叛軍ID/叛軍號召者ID、姓名、電話）
 - 即時顯示可抽出人數，並於抽獎時驗證欲抽出人數是否合理（小於可抽出人數）
 - 中獎者被抽出後即會在資料庫中被標示“已抽出”，而不會被重複抽中
### 作品廊：專題製作成果展示
#### 首頁區塊
 - 顯示全部共13組的專題成果頁面快速連結
 - 將專題分為三個類別，並可點擊標籤快速尋找該分類下的專題組別
 - 專題連結封面為各組的Logo
    - 電腦版頁面於滑鼠懸浮時可見專題標題與所屬分類
    - 手機版頁面可直接於畫面上看到專題標題
    - 點擊Logo後可見各專題組之海報內容，並在點擊海報後可進入專題成果頁面
#### 各組專題成果頁面
 - 由各專題組繳交與設計編排內容（文字介紹與圖片/影片）
 - 圖片及影片輪播使用網頁模版內建功能
 - 網址由各專題組自訂，並由網站管理者設定
### 留言板
#### 留言區
 - 開放所有瀏覽者觀看及新增留言
 - 留言者可刪除自己最新的一則留言
#### 留言管理面板
 - 為避免不雅之言論出現，以此留言管理面板進行方便的留言管理（刪除），由總籌及網站管理者進行管理
### 線上展
 - 以Artsteps線上展製作工具設計
 - 內容主要為各組海報、文字內容介紹及成果照
 - 線上展場中心為專展主視覺，背面為觀展方式
### 展場AR互動
 - 以MindAR.js製作
 - 內容主要為各組海報及圖片影片介紹，使用者可於展場中掃描各組的海報後觀看圖片，並有快速連結至該組的社群網站介紹貼文，以及該組的專題成果頁面
### 頁尾
 - 系所名稱、地址及聯絡方式
 - 專展社群網站快速連結及Email聯繫方式
 - 網站導覽：所有連結
 - 贊助者Logo及連結
 - 網站瀏覽次數統計
### 其他功能：專展數據總結
 - 基本數據統計結果，如：網站瀏覽次數、留言人數、回饋及投票人數、抽獎參與人數
 - 三項人氣獎項之各組得票狀況，以柱狀圖顯示
 - 公宣組設計之IG解謎遊戲破關者回饋資訊佔比，如：困難度、好玩程度，以圓餅圖顯示
 - 表單各問題填答結果佔比，以圓餅圖顯示

## 架設狀況
### 伺服器：Microsoft Azure
 - 原本架設於學校內之電腦上，後來因網路穩定性問題，改架設於微軟Azure公有雲之Linux-Apache伺服器
 - 虛擬機器之規格原本設定為 1vCPU + 1G RAM，但後來升級至 2vCPU + 4G RAM
    - 改善了開發時遇到的ssh與sftp連線穩定性問題（因記憶體不足導致）
### 資料庫：MySQL
 - 同樣於虛擬機中設定及建立
 - 共有6個資料表於資料庫中
    - code：IG解謎遊戲之破關者回饋及領獎表單
    - messages：網站留言板之留言存放
    - signup：一般參展觀眾入場領取之入場編號（叛軍ID），並記錄是否已投票及參與抽獎
    - stu_signup：112級學生之學號（叛軍號召者ID），並記錄所屬組別、姓名、是否已投票及參與抽獎
        - 原本還有設計各學生的專屬入場編號，後來直接採用學號進行投票登入
    - vote：一般參展觀眾及112級學生的觀展回饋表單資料存放
        - 112級學生之表單資料有幾個欄位為空值
    - lottery：一般參展觀眾及112級學生的抽獎個人資料存放，包含姓名及手機號碼
### 網域：FreeNom免費網域 + Cloudflare SSL加密與CDN
 - FreeNom: ntnutechpunk.ml，期限至2023-08-07，之後須重新申請
 - Cloudflare: 使用其免費SSL加密服務、CDN及速度優化服務等

## 成果紀錄與截圖
 - Azure虛擬機
     - 透過SSH連線
        ![](https://i.imgur.com/vxKFjoj.png)
     - MySQL 資料表
        ![](https://i.imgur.com/q4Lyr5Q.png)
     - 專展期間使用狀況
        ![](https://i.imgur.com/hWrjNlU.png)
 - Cloudflare後台：專展期間流量紀錄
    ![](https://i.imgur.com/5vDfvU6.png)
    
    ![](https://i.imgur.com/6AaGbR5.png)
 - 專展頁面截圖
     - 首頁 ![](https://i.imgur.com/3ViXkE8.jpg)
     - 留言板 ![](https://i.imgur.com/aYIHlzQ.png)
     - 投票結果公佈 ![](https://i.imgur.com/P31o28G.png)
     - 線上展 ![](https://i.imgur.com/6KJqQo0.jpg)
     - 專展數據總結
         ![](https://i.imgur.com/Kr0phdh.png)
         
         ![](https://i.imgur.com/D96gUg7.png)
         
         ![](https://i.imgur.com/wFfNOsU.png)
         
         ![](https://i.imgur.com/caIYg1I.png)
         
         ![](https://i.imgur.com/RrYzcMQ.png)
