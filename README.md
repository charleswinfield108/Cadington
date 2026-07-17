# Cadington

WordPress site. This repo tracks only the custom theme
(`wp-content/themes/cadington`) — WordPress core, plugins, and the
database are not version-controlled; they live on the server and are
managed through wp-admin.

## Local development

Requires Docker (on WSL2: enable "Use the WSL 2 based engine" +
this distro under Docker Desktop → Settings → Resources → WSL Integration).

```bash
docker compose up -d
```

Visit `http://localhost:8080` and complete the WordPress install (any
throwaway admin credentials — this is a local sandbox). Then in
wp-admin → Appearance → Themes, activate **Cadington**.

Edit files under `wp-content/themes/cadington/` in VS Code — the
container mounts that folder directly, so changes appear on refresh
with no rebuild step.

To reset the local site (wipe DB and uploads):

```bash
docker compose down -v
```

## Git workflow

```bash
git add wp-content/themes/cadington
git commit -m "..."
git push
```

Only theme files are tracked (see `.gitignore`), so `git status` should
never show WordPress core or uploads as changed.

## Deploying to Hostinger

The Premium plan includes hPanel's native Git deploy feature.

1. In hPanel, go to **Websites → [Cadington site] → Advanced → Git**.
2. Click **Continue with GitHub**, authorize the Hostinger GitHub
   extension, and select the `charleswinfield108/Cadington` repo.
3. Set **Branch** to `main` and **Root directory** to
   `public_html/wp-content/themes/cadington`.
4. Enable auto-deploy so every push to `main` deploys automatically,
   or click **Redeploy** to trigger one manually.

GitHub stays the source of truth for the theme code — Hostinger just
mirrors whatever was last deployed. Note: changing or disconnecting
the linked repo later will overwrite files in that root directory on
the next deploy, so don't repoint it casually once live.

## Backups

Git/GitHub is the backup for theme *code*. It does not back up the
WordPress database, media uploads, or plugin/core files — set up
Hostinger's built-in backup feature (hPanel → **Files → Backups**) or
the UpdraftPlus plugin for that.
