---
title: "My First Post"
excerpt: "LaravelとDockerを使ってブログアプリを一から構築した記録です。Alpine.jsで動きをつけるのも面白かったです。"
date: 2025-07-30
slug: "my-first-post"
---

Laravelを使ってブログアプリをスクラッチ開発する課題に取り組みました。  
今回はDockerを使って開発環境を構築し、Laravel 8とAlpine.jsを使って動きのあるページも作成しました。

---

## 開発環境の構築

まずはDockerを使ってLaravelの開発環境を用意しました。  
`docker-compose.yml` を使えば、PHP・MySQL・Nginxなどをまとめて管理できて便利です。

```bash
docker-compose up -d --build
