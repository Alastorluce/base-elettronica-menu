import datetime

DOMINIO = "https://www.baseelettronicaservice.it"
oggi = datetime.date.today().isoformat()

sitemap = [
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">',
    f'  <url>',
    f'    <loc>{DOMINIO}</loc>',
    f'    <lastmod>{oggi}</lastmod>',
    f'    <priority>1.0</priority>',
    f'  </url>',
    '</urlset>'
]

with open("sitemap.xml", "w", encoding="utf-8") as f:
    f.write("\n".join(sitemap))

print("✅ sitemap.xml generata (solo homepage)")
