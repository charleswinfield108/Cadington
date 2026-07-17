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

Two ways to get theme changes onto Hostinger, depending on your plan:

### Option A — hPanel Git deploy (Business/Cloud/VPS plans)

1. In hPanel, go to **Advanced → Git**.
2. Add this GitHub repo as a source, and set the deploy path to
   `public_html/wp-content/themes/cadington`.
3. Click **Deploy** (or enable auto-deploy) after each push to `main`.

### Option B — SFTP (Shared/Premium plans, no Git feature)

1. Get SFTP credentials from hPanel → **Files → FTP Accounts**.
2. In VS Code, install an SFTP extension (e.g. "SFTP" by Natizyskunk)
   and point it at `public_html/wp-content/themes/cadington`.
3. Use its "upload on save" or manual "sync local → remote" to push
   changes after committing to git.

Either way, GitHub stays the source of truth for the theme code —
Hostinger just mirrors whatever was last deployed.

## Backups

Git/GitHub is the backup for theme *code*. It does not back up the
WordPress database, media uploads, or plugin/core files — set up
Hostinger's built-in backup feature (hPanel → **Files → Backups**) or
the UpdraftPlus plugin for that.
