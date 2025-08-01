# Laravel アプリケーション（Docker環境）

このリポジトリは、Laravel8以降を使用し、Dockerにより環境構築されたWebアプリケーションです。  
以下に、環境構築および基本的な操作手順を記載します。

---

## 🔧 環境構成

- Laravel: 8.x 以上
- PHP: 8.x
- Webサーバー: Nginx / Apache
- データベース: MySQL （今回は使用していない）
- Docker / Docker Compose

---

## 🚀 セットアップ手順

### 1. リポジトリをクローン

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2. `.env` ファイルを作成

```bash
cp .env.example .env
```

※必要に応じて `.env` を編集してください。

### 3. Docker コンテナのビルドと起動

```bash
docker-compose up -d --build
```

### 4. Laravel の初期設定（初回のみ）

```bash
docker exec -it app php artisan key:generate
docker exec -it app php artisan migrate
# 必要であればシードも実行
# docker exec -it app php artisan db:seed
```

---

## 🌐 アプリケーションへのアクセス

以下のURLからアクセスできます（ポート番号は docker-compose.yml に準拠）：

```
http://localhost:8000
```

---

## 🧪 よく使うコマンド（Docker内）

- Artisan コマンド実行：

```bash
docker exec -it app php artisan <コマンド>
```

- Composer インストール：

```bash
docker exec -it app composer install
```

- Laravel テスト実行：

```bash
docker exec -it app php artisan test
```

---

## 📄 備考

- Laravel のバージョン確認：
```bash
docker exec -it app php artisan --version
```

- MySQL などのDB情報は `.env` に準拠します。

---

## 📝 投稿機能（Posts）について

作成した記事は、以下のディレクトリにマークダウンファイル（`.md`）として保存されています：  
`/resources/posts`

新規記事を作成する場合は、このディレクトリ内に新しい `.md` ファイルを追加し、Git にコミット・プッシュしてください。  
これにより、ブログ記事としてサイトに反映されます。

記事の内容は **マークダウン形式** で記述してください。  
ファイルの冒頭には、以下のようなメタ情報を `YAMLフロントマター` として記載します：

```md
---
title: "My Third Post"
excerpt: "Markdownを使うことで、記事作成が簡単かつ視覚的にわかりやすくなりました。HTMLに比べて可読性が高いのが魅力です。"
date: 2025-09-30
slug: "my-third-post"
---

slug注意点

slug は、記事のURLとして使用される文字列です。
通常はタイトルを英語でハイフン区切りにしたものを指定してください。

タイトルが「My Third Post」の場合 → slug: "my-third-post"
