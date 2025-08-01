---
title: "My Fourth Post"
excerpt: "新しい記事をMarkdownで作成 → Gitでコミット → Dockerで反映。この流れで効率的に記事を更新できるようになりました。"
date: 2025-10-30
slug: "my-fourth-post"
---

このブログアプリでは、記事をMarkdownファイルとして管理しているため、  
Gitでバージョン管理するのがとても便利です。

---

## 実際の流れ

1. `resources/posts/` に新しい `.md` ファイルを作成
2. Gitで変更をコミット：

```bash
git add .
git commit -m "Add new blog post"
git push origin main
