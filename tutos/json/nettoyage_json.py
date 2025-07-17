import json

with open('balises.json', 'r', encoding='utf-8') as f:
    balises = json.load(f)

# Trier par tag
balises.sort(key=lambda b: b['tag'])

# Supprimer doublons en gardant la première occurrence
tags_vus = set()
balises_sans_doublons = []
for balise in balises:
    if balise['tag'] not in tags_vus:
        balises_sans_doublons.append(balise)
        tags_vus.add(balise['tag'])

# Écrire une seule fois dans le fichier
with open('balises.json', 'w', encoding='utf-8') as f:
    json.dump(balises_sans_doublons, f, indent=2, ensure_ascii=False)

print(f"Balises avant : {len(balises)}, après nettoyage : {len(balises_sans_doublons)}")