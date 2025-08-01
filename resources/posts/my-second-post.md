---
title: "My Second Post"
excerpt: "Laravelと相性の良いAlpine.jsを使って、クリックで本文が展開される『続きを読む』機能を実装してみました。"
date: 2025-08-30
slug: "my-second-post"
---

Laravel 8のBladeテンプレートに、軽量なJavaScriptライブラリ「Alpine.js」を組み合わせて、  
投稿本文に「続きを読む / 閉じる」機能を実装してみました。

---

## Alpine.jsの導入方法

`layout.blade.php` に以下を追記するだけで使用可能です：

```html
<script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
