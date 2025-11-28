// Data ahli majlis (24 orang)
const councilMembers = [{
    name: "Dato' Ahmad bin Abdullah",
    position: "Ahli Majlis Zon 1",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+1",
    phone: "03-5511 2345",
    email: "ahmad@mbsa.gov.my",
    kawasan: "Seksyen 1-7"
},
{
    name: "Puan Siti Nurhaliza binti Hassan",
    position: "Ahli Majlis Zon 2",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+2",
    phone: "03-5511 2346",
    email: "siti@mbsa.gov.my",
    kawasan: "Seksyen 8-14"
},
{
    name: "Encik Rajesh Kumar a/l Subramaniam",
    position: "Ahli Majlis Zon 3",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+3",
    phone: "03-5511 2347",
    email: "rajesh@mbsa.gov.my",
    kawasan: "Seksyen 15-21"
},
{
    name: "Datin Fatimah binti Ismail",
    position: "Ahli Majlis Zon 4",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+4",
    phone: "03-5511 2348",
    email: "fatimah@mbsa.gov.my",
    kawasan: "Seksyen 22-25"
},
{
    name: "Encik Wong Wei Lun",
    position: "Ahli Majlis Zon 5",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+5",
    phone: "03-5511 2349",
    email: "wong@mbsa.gov.my",
    kawasan: "Bukit Jelutong"
},
{
    name: "Puan Aisha binti Mohd Ali",
    position: "Ahli Majlis Zon 6",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+6",
    phone: "03-5511 2350",
    email: "aisha@mbsa.gov.my",
    kawasan: "Setia Alam"
},
{
    name: "Dato' Seri Mohamed bin Ibrahim",
    position: "Ahli Majlis Zon 7",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+7",
    phone: "03-5511 2351",
    email: "mohamed@mbsa.gov.my",
    kawasan: "Kota Kemuning"
},
{
    name: "Encik Lim Chong Wei",
    position: "Ahli Majlis Zon 8",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+8",
    phone: "03-5511 2352",
    email: "lim@mbsa.gov.my",
    kawasan: "Kemuning Utama"
},
{
    name: "Puan Nora binti Hashim",
    position: "Ahli Majlis Zon 9",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+9",
    phone: "03-5511 2353",
    email: "nora@mbsa.gov.my",
    kawasan: "Shah Alam Jaya"
},
{
    name: "Encik Ravi a/l Chandran",
    position: "Ahli Majlis Zon 10",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+10",
    phone: "03-5511 2354",
    email: "ravi@mbsa.gov.my",
    kawasan: "Glenmarie"
},
{
    name: "Dato' Zainuddin bin Ahmad",
    position: "Ahli Majlis Zon 11",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+11",
    phone: "03-5511 2355",
    email: "zainuddin@mbsa.gov.my",
    kawasan: "Alam Impian"
},
{
    name: "Puan Letchumi a/p Govindasamy",
    position: "Ahli Majlis Zon 12",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+12",
    phone: "03-5511 2356",
    email: "letchumi@mbsa.gov.my",
    kawasan: "Saujana Utama"
},
{
    name: "Encik Hassan bin Yusof",
    position: "Ahli Majlis Zon 13",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+13",
    phone: "03-5511 2357",
    email: "hassan@mbsa.gov.my",
    kawasan: "Taman Sri Muda"
},
{
    name: "Datin Sri Azizah binti Rahman",
    position: "Ahli Majlis Zon 14",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+14",
    phone: "03-5511 2358",
    email: "azizah@mbsa.gov.my",
    kawasan: "Putra Heights"
},
{
    name: "Encik Tan Kok Seng",
    position: "Ahli Majlis Zon 15",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+15",
    phone: "03-5511 2359",
    email: "tan@mbsa.gov.my",
    kawasan: "Subang Jaya (MBSA)"
},
{
    name: "Puan Mariam binti Md Nor",
    position: "Ahli Majlis Zon 16",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+16",
    phone: "03-5511 2360",
    email: "mariam@mbsa.gov.my",
    kawasan: "Bandar Baru Klang"
},
{
    name: "Encik Kumar a/l Ramasamy",
    position: "Ahli Majlis Zon 17",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+17",
    phone: "03-5511 2361",
    email: "kumar@mbsa.gov.my",
    kawasan: "Bandar Botanik"
},
{
    name: "Dato' Halim bin Abdullah",
    position: "Ahli Majlis Zon 18",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+18",
    phone: "03-5511 2362",
    email: "halim@mbsa.gov.my",
    kawasan: "Taman Alam Megah"
},
{
    name: "Puan Jasmine binti Jamil",
    position: "Ahli Majlis Zon 19",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+19",
    phone: "03-5511 2363",
    email: "jasmine@mbsa.gov.my",
    kawasan: "Taman Subang Perdana"
},
{
    name: "Encik David Lim",
    position: "Ahli Majlis Zon 20",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+20",
    phone: "03-5511 2364",
    email: "david@mbsa.gov.my",
    kawasan: "Taman Bukit Subang"
},
{
    name: "Puan Rozita binti Hamid",
    position: "Ahli Majlis Zon 21",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+21",
    phone: "03-5511 2365",
    email: "rozita@mbsa.gov.my",
    kawasan: "Taman Teknologi"
},
{
    name: "Encik Suresh a/l Maniam",
    position: "Ahli Majlis Zon 22",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+22",
    phone: "03-5511 2366",
    email: "suresh@mbsa.gov.my",
    kawasan: "Taman Perindustrian"
},
{
    name: "Dato' Noraini binti Zakaria",
    position: "Ahli Majlis Zon 23",
    image: "https://via.placeholder.com/400x500/667eea/ffffff?text=Ahli+23",
    phone: "03-5511 2367",
    email: "noraini@mbsa.gov.my",
    kawasan: "Taman Cahaya"
},
{
    name: "Encik Faizal bin Sulaiman",
    position: "Ahli Majlis Zon 24",
    image: "https://via.placeholder.com/400x500/764ba2/ffffff?text=Ahli+24",
    phone: "03-5511 2368",
    email: "faizal@mbsa.gov.my",
    kawasan: "Bandar Puteri"
}
];

// Fungsi untuk menjana card
function generateCards() {
    const container = document.getElementById('councilMembers');

    councilMembers.forEach((member, index) => {
        const col = document.createElement('div');
        col.className = 'col-lg-3 col-md-4 col-sm-6 mb-4';
        col.setAttribute('data-aos', 'fade-up');
        col.setAttribute('data-aos-delay', (index % 8) * 100);

        col.innerHTML = `
                    <div class="council-card">
                        <div class="card-image-wrapper">
                            <img src="${member.image}" alt="${member.name}" class="card-image">
                            <div class="card-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">${member.name}</h5>
                            <p class="card-position">${member.position}</p>
                            <button class="btn btn-info-custom" onclick="showInfo(${index})">
                                <i class="bi bi-info-circle"></i> Lihat Info
                            </button>
                        </div>
                    </div>
                `;

        container.appendChild(col);
    });
}

// Fungsi untuk paparkan maklumat dalam modal
function showInfo(index) {
    const member = councilMembers[index];
    document.getElementById('modalTitle').textContent = member.name;
    document.getElementById('modalBody').innerHTML = `
                <div class="info-item">
                    <div class="info-label"><i class="bi bi-briefcase"></i> Jawatan</div>
                    <div class="info-value">${member.position}</div>
                </div>
                <div class="info-item">
                    <div class="info-label"><i class="bi bi-geo-alt"></i> Kawasan</div>
                    <div class="info-value">${member.kawasan}</div>
                </div>
                <div class="info-item">
                    <div class="info-label"><i class="bi bi-telephone"></i> Telefon</div>
                    <div class="info-value">${member.phone}</div>
                </div>
                <div class="info-item">
                    <div class="info-label"><i class="bi bi-envelope"></i> Email</div>
                    <div class="info-value">${member.email}</div>
                </div>
            `;

    const modal = new bootstrap.Modal(document.getElementById('infoModal'));
    modal.show();
}

// Initialize AOS
AOS.init({
    duration: 800,
    once: true
});

// Jana cards semasa page load
generateCards();