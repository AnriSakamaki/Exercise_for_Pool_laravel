---
title: "My Fifth Post"
excerpt: "READMEにDockerの使い方を記載することで、誰でも簡単に開発環境を立ち上げられるようにしました。"
date: 2025-11-30
slug: "my-fifth-post"
---

最終的には、誰が見ても再現できるように `README.md` に手順をまとめました。  
これによって、チーム開発や提出の際もスムーズになります。

---

## 実際の内容

```md
## セットアップ方法（Docker）

```bash
git clone https://github.com/your-name/blog-app.git
cd blog-app
cp .env.example .env
docker-compose up -d --build
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
