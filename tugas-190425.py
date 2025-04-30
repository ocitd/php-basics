nilai = [
    {"nama": "rasyid", "nilai": 100},
    {"nama": "budi", "nilai": 90},
    {"nama": "andi", "nilai": 80},
    {"nama": "siti", "nilai": 70},
    {"nama": "sari", "nilai": 60},
    {"nama": "siti", "nilai": 50},
]

for poin in nilai:
    if poin["nilai"] >= 85:
        print(f"{poin['nama']} menang")
    elif poin["nilai"] >= 60 and poin["nilai"] < 85:
        print(f"{poin['nama']} hampir menang")
    else:
        print(f"{poin['nama']} gagal")

nama = ['faiq', 'fauzan', 'fahmi', 'fahri', 'faisal']
skor = [100, 90, 80, 70, 60]

for i in range(len(nama)):
    name = nama[i]
    score = skor[i]

    if score >= 85:
        status = "menang"
    elif score >= 60:
        status = "hampir menang"
    else:
        status = "gagal"

    print(f"nama :{name} skor: {score} status: {status}")
print("=========================================")