# Cadington

WordPress theme repo. This repo *is* the custom theme — its root
maps directly onto `wp-content/themes/cadington` on the server.
WordPress core, plugins, and the database are not version-controlled;
they live on the server and are managed through wp-admin.

(The repo root = the theme, rather than nesting it under a
`wp-content/themes/cadington/` path inside the repo, because
Hostinger's Git deploy copies the entire repo verbatim into whatever
directory you point it at — it has no way to deploy only a subfolder
of the repo.)

## Local development

Requires Docker (on WSL2: enable "Use the WSL 2 based engine" +
this distro under Docker Desktop → Settings → Resources → WSL Integration).

```bash
docker compose up -d
```

Visit `http://localhost:8080` and complete the WordPress install (any
throwaway admin credentials — this is a local sandbox). Then in
wp-admin → Appearance → Themes, activate **Cadington**.

Edit files in this repo's root in VS Code (style.css, functions.php,
index.php, header.php, footer.php) — the container mounts the whole
repo directly into the theme directory, so changes appear on refresh
with no rebuild step.

To reset the local site (wipe DB and uploads):

```bash
docker compose down -v
```

## Git workflow

`main` is protected — it only auto-deploys to Hostinger and doesn't
accept direct pushes. Do all work on `dev`, then merge to `main` via
a pull request when it's ready to go live.

```bash
git checkout dev
# ...edit, test locally...
git add .
git commit -m "..."
git push
```

Then open a pull request from `dev` into `main` on GitHub (or run
`gh pr create --base main --head dev`) and merge it once you're
satisfied it's ready for production. Merging to `main` triggers the
Hostinger deploy.

## Deploying to Hostinger

The Premium plan includes hPanel's native Git deploy feature.

1. In hPanel, go to **Websites → [Cadington site] → Advanced → Git**.
2. Click **Connect with GitHub**, authorize the Hostinger GitHub App,
   and select the `charleswinfield108/Cadington` repo.
3. Set **Branch** to `main` and **Root directory** to
   `public_html/wp-content/themes/cadington`.
4. Enable auto-deploy so every push to `main` deploys automatically,
   or click **Redeploy** to trigger one manually.

GitHub stays the source of truth for the theme code — Hostinger just
mirrors whatever was last deployed into that directory. Note:
changing or disconnecting the linked repo later will overwrite files
in that root directory on the next deploy, so don't repoint it
casually once live.

## Backups

Git/GitHub is the backup for theme *code*. It does not back up the
WordPress database, media uploads, or plugin/core files — set up
Hostinger's built-in backup feature (hPanel → **Files → Backups**) or
the UpdraftPlus plugin for that.
