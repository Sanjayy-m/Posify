<x-app-layout>
    <style>
.header {
    text-align: center;
    color: black;
    margin-bottom: 20px;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 auto; /* Center the container */
    max-width: 1200px; /* Optionally set a maximum width */
}

.box {
flex-basis: calc(30% - 20px); /* Adjust as needed */
margin-bottom: 20px;
padding: 20px;
border-radius: 20px; /* Curved rectangle */
overflow: hidden;
transition: transform 0.3s ease; /* Add transition for smooth zoom */
background-color: rgba(54, 13, 19, 0.2); /* Transparent background color */
width:fit-content;
}


.box:hover {
    transform: scale(1.05); /* Zoom effect on hover */
}

.box h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.box p {
    font-size: 1rem;
    line-height: 1.5;
}

.search-container {
    margin: 20px auto; /* Center the search container */
    text-align: center;
}

.search-container select {
    padding: 8px;
    font-size: 16px;
    border-radius: 5px;
}

.search-container button {
    padding: 8px 20px;
    font-size: 16px;
    border-radius: 5px;
    background-color: #561C24;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

.search-container button:hover {
    background-color: #360d13;
}


.image-description {
    font-size: 14px;
    color: #561C24;
    text-align: center;
    text-transform: lowercase;
}
.image-description::first-letter {
    text-transform: uppercase;
}

.image-containerr {
    display: flex;
    flex-wrap: wrap; /* Wrap items to the next row */
    justify-content: center; /* Center the boxes horizontally */
    gap: 20px; /* Spacing between boxes */
}

.image-containerr img {
    display: inline-block; /* Ensure images are displayed as blocks */
    width: 180px; /* Set fixed width */
    height: 120px; /* Set fixed height */
    margin: 5px; /* Add margin for spacing between images */
    border: 2px solid #ddd; /* Add border */
    border-radius: 10px; /* Add border radius */
    transition: transform 0.1s ease; /* Add transition for zoom on hover */
    object-fit:contain ;
}

.image-containerr img:hover {
    transform: scale(1.5); /* Zoom effect on hover */
}

.boxx {
    display: flex; /* Enable flexbox layout */
    flex-direction: row; /* Stack items vertically */
    justify-content: center; /* Center items horizontally */
    align-items: center; /* Center items vertically */
    flex: 1 0 calc(50% - 20px); /* Set flex basis to 50% of the container width minus margin */
    height: 150px; /* Set fixed height */
    background-color: rgba(54, 13, 19, 0.2); /* Transparent background color */
    border-radius: 20px; /* Curved rectangle */
    width: fit-content;
}
.res-cont{
    display: flex; /* Enable flexbox layout */
    flex-direction: row; /* Stack items vertically */
    justify-content: center; /* Center items horizontally */
    align-items: center; /* Center items vertically */
    flex: 1 0 calc(50% - 20px); /* Set flex basis to 50% of the container width minus margin */
    height: 150px; /* Set fixed height */
    background-color: rgba(54, 13, 19, 0.2); /* Transparent background color */
    border-radius: 20px; /* Curved rectangle */
    width: fit-content;
}

    </style>
    <div class="header">
        <h1 style="color:#561C24;font-size:50px;">Explore</h1>
    </div>

    <div class="container">
        <div class="box">
            <h2>What is posture detection?</h2>
            <p>Posture detection refers to the process of assessing and analyzing the positioning and alignment of the human body in various states, such as standing, sitting, or lying down. It involves the use of technology, such as sensors and algorithms, to evaluate the posture of individuals and provide feedback on correct or incorrect postural alignment.</p>
            <p>The primary goal of posture detection is to promote good posture habits and prevent or alleviate musculoskeletal disorders (MSDs) and related health issues. By accurately identifying improper posture, individuals can be alerted to make adjustments to their body positioning to reduce strain on muscles and joints, improve balance and stability, and enhance overall well-being.</p>
        </div>
        <div class="box">
            <h2>Goal of the Application</h2>
            <p>Improper posture detection falls within the domains of Healthcare and Physical therapy, addressing issues like back pain, neck strain, and reduced mobility. Correcting posture is crucial for preventing musculoskeletal problems and promoting overall well-being. Prolonged poor posture can lead to permanent deformation of bones and muscles.</p>
            <p>In today's professional landscape, long working hours contribute to improper posture. This is especially relevant in office settings, where extended sitting and inadequate workstation setup can result in pain, discomfort, fatigue, and long-term health issues. Identifying and correcting bad postures also play a vital role in healing and preventing additional injuries in physical therapy and rehabilitation contexts.</p>
        </div>
        <div class="box">
            <h2>What is correct posture?</h2>
            <p>Correct posture is optimal alignment of body parts, reducing strain on muscles and joints. It involves maintaining natural spine curves, a neutral pelvis, balanced weight distribution, aligned joints, relaxed shoulders, engaged core, and neutral head position. It's essential for musculoskeletal health and overall well-being.</p>
            <ul>
                <li>Spine Alignment: Maintains natural curves</li>
                <li>Pelvis Position: Keeps pelvis neutral</li>
                <li>Weight Distribution: Balances weight evenly</li>
                <li>Joint Alignment: Ensures joints are aligned</li>
                <li>Shoulder Relaxation: Keeps shoulders relaxed</li>
                <li>Core Engagement: Strengthens core muscles</li>
                <li>Head Position: Maintains neutral head position</li>
            </ul>
            <p>Essential for musculoskeletal health and overall well-being.</p>
        </div>
    </div>

   <div>
    <h2 style="color:#561C24;font-size:50px;"><center>Search By Field</center></h2>
   </div>

    <div class="search-container">
        <select id="categories" onchange="updateSubcategories()" onclick="playAudio()">
            <option value="" disabled selected>Choose a category</option>
            <option value="driving">Driving</option>
            <option value="manual-labour">Manual Labour</option>
            <option value="patient">Patient Handling Posture</option>
            <option value="desk">Desk Ergonomics</option>
            <option value="dental">Dental Procedure</option>
            <option value="material">Material Handling</option>
            <option value="automotive">Automotive Repair</option>
            <option value="warehouse">Warehouse & Distribution Workers</option>
            <option value="makeup">Make-up Artist</option>
            <option value="cooking">Cooking Posture</option>
            <option value="smartphone">Smartphone Users</option>
        </select>
        <select id="subcategories" style="display: none;">
            <option value="" disabled selected>Choose a subcategory</option>
        </select>
        <button id="searchButton">Search</button>
        <button id="clearButton" onclick="clearSelection()">Clear</button>
    </div>

    <div class="image-containerr" id="imageContainer">
        <!-- Images will be dynamically added here -->
    </div>
    <audio controls style="display: none" id="audio">
        <source src="{{url('/audio/search.mp3')}}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImg">
    </div>

    <script>

function playAudio() {
            var audio = document.getElementById("audio");
            audio.play();
        }
 const images = {
            "bike riding": ["https://images.squarespace-cdn.com/content/v1/522386b7e4b0db0027e9d27d/1621713017564-FDBNRUVJ9JOFJ4YNKMEX/2019-07-22_Allant-481-crop.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4kzwR1m7PZTxYLXNRsvdi2wmLFmCrILuipkQwKw9-heDBEwZAXg3RlFjnnpWzF0KcEyI&usqp=CAU", "https://i.ytimg.com/vi/qjx9QsgIc4Y/sddefault.jpg"],
            "heavy vehicle driving": ["https://www.sprintdriving.com/wp-content/uploads/2024/02/truck-driver-2.jpg", "https://www.transforce.com/hubfs/Blog%20Heroes%202022/professional-femele-truck-driver-cb-talking-picture-id1318295171.jpg", "https://www.trucknews.com/wp-content/uploads/2021/04/SameerVij.jpg"],
            "car driving": ["https://www.womenonwheels.co.za/wp-content/uploads/How-women-should-adjust-their-driving-positions_istock-620x372.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNFixPf50soZpLNobguvOM9Wqa8kTyaObKdMJxZBXONop1NF1laIyNr4gmijQC3Kvr2j8&usqp=CAU", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb4hsE2rJh4UK6_KByMrU7MOXDZKMYu9iLVIKGGPj_K9Ug3uy29693jQ7WMnCmnnhxP98&usqp=CAU"],
            "construction site lifting": ["https://media.istockphoto.com/id/612833402/photo/hard-working-construction-worker.jpg?s=612x612&w=0&k=20&c=7RqgMDoOZczU6AEN6-5JenHO78Mv7LVSGrQtd8ztPIY=", "https://mlnq5qmsdxfa.i.optimole.com/cb:02oo.5d225/w:auto/h:auto/q:90/f:best/https://www.vensure.com/wp-content/uploads/2019/10/LiftingPrecautions_1300x650-1.jpg", "https://assets-global.website-files.com/647888ca92d03e3fca3f1ea0/647888ca92d03e3fca3f2079_shutterstock_636995701.jpg"],
            "warehouse pallet handling": ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL85cZPPfJn4aFWibVsQYjKJYtZpVsFla4fYMNjiMsPw&s", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEzjIhwTfTQxzbMiaVRRL0AGjfeLJzcpp-MPwNFAHmlyMTh86D9O7vddwR10AcLlVbAyg&usqp=CAU", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxGUN-cvafvaa0cDA8_PKVC6rmkQtIuvOj0gRbVlYk1G1fUycnHAYhVdN8WU2gnj8CDEU&usqp=CAU"],
            "manufacturing line assembly": ["https://www.timotion.com/_upload/images/Banner_Prod_Line1.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSC3VfqstTYmhukWn1J0jne_xwXa6ry8wjgAJF096z3dtPB21Qfg1u6RvaytUFPdaU3aI&usqp=CAU", "https://www.assemblymag.com/ext/resources/Issues/2020/October/POY/asb1020poy1.jpg"],
            "elderly care lifting": ["https://www.performancehealth.com/media/wysiwyg/blog/articles/patient-slide-tube.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjDuGj183_kTfiTUGWFWT1RU2OEgFSBxnjF4hWl3ZZxE0gHkpLyw_PPICIFeq-iNN2o3w&usqp=CAU", "https://media.istockphoto.com/id/1250277583/ja/%E3%82%B9%E3%83%88%E3%83%83%E3%82%AF%E3%83%95%E3%82%A9%E3%83%88/%E8%BA%AB%E4%BD%93%E9%9A%9C%E5%AE%B3%E4%BB%8B%E8%AD%B7%E8%80%85%E3%81%AE%E6%89%8B%E3%82%92%E6%8F%A1%E3%82%8A%E8%BA%AB%E4%BD%93%E9%9A%9C%E5%AE%B3%E3%82%92%E6%8C%81%E3%81%A1%E3%81%AA%E3%81%8C%E3%82%89%E8%B5%B7%E3%81%8D%E3%82%88%E3%81%86%E3%81%A8%E3%81%99%E3%82%8B%E7%B4%A0%E6%95%B5%E3%81%AA%E6%82%B2%E3%81%97%E3%81%84%E8%80%81%E4%BA%BA.jpg?s=612x612&w=0&k=20&c=tL7Hl8yK2AMf8nKbVr1XniWO2kChze1nst5age_5vFU="],
            "hospital bed-to-chair transfer": ["https://www.homecaremag.com/sites/default/files/Nursehelpselderly-980x400_0.jpg", "https://cupe.ca/sites/default/files/node_representative_image/patient_lift.jpg", "https://media.istockphoto.com/id/1316202028/photo/nurse-helping-senior-patient-at-clinic.jpg?s=612x612&w=0&k=20&c=tWrgqeHWZvtEMMnXadr3MOrfoJgtpIue3qA-PiLM8xg="],
            "stretcher handling": ["https://www.arjo.com/globalassets/blog/new-blog-images/what_technologies_1_2_final2.jpg?width=1900", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi9kW-NJu1zDFzfRFvLoHH07oeyqX43n_EhcmX_n_HTqovqlOkF91Nxmj8lbm4xGJi7AU&usqp=CAU", "https://as1.ftcdn.net/v2/jpg/04/33/93/94/1000_F_433939490_empg0pofv6dcKHy90HNRd9FVsQbxQtvv.jpg"],
            "office desk typing": ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV5DSC9jm9cbW-TgmEJ4LMXfPONoTvzpF9wy5NIW32zA&s", "https://c8.alamy.com/comp/JCE26C/businessman-sitting-comfortably-on-pilates-ball-and-using-computer-JCE26C.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0x_do38BN4vov3pTfTUb7kF8WaeGeBAsDI5j6qsmKHqhRc5MRcYwRAfqNmDZ_LdLdHvY&usqp=CAU"],
            "call center desk": ["https://img.freepik.com/free-photo/smiling-young-blonde-call-centre-girl-wearing-headset-sitting-desk-with-work-tools-holding-clipboard-looking-camera-isolated-green-wall_141793-113489.jpg", "https://img.freepik.com/free-photo/impressed-young-bald-call-center-man-wearing-headset-sitting-desk-with-work-tools-showing-empty-hand-isolated-white_141793-77448.jpg", "https://img.freepik.com/premium-photo/young-beautiful-woman-casual-clothes-with-headphones-microphone-sitting-table-with-laptop-holding-hand-ear-smiling-white-wall-working-office_141793-128752.jpg"],
            "dental hygienist cleaning procedure": ["https://www.teethtalkgirl.com/static/89b4693555bb507f8cf6e231748ed3d4/ea6f3/24dd81891c_1200_webp.webp", "https://dentistry.co.uk/app/uploads/2018/03/shutterstock_541087750-e1521713703758.jpg", "https://encoredental.ca/wp-content/uploads/bfi_thumb/dental-hygienist-dental-cleaning-3anrvd8a0vpwdt5t9ngehjw376vr2ubqfg5pzakdksvwyc9mq.jpg"],
            "orthodontic procedure": ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB7_iHuN-zKjPonpfSYDrStRaHD5sX59-JuYrx6llk_aq7ST7wFJhfQPA_E6yILT2pZSM&usqp=CAU", "https://luminadental.ca/images/dentist-doing-check-up-patient.jpg", "https://drtosundental.com/wp-content/uploads/2023/09/Dr-Tosun-Orthodontic-Treatment3.jpg"],
            "endodontic procedure": ["https://www.dentistrytoday.com/wp-content/uploads/2017/01/0117_Haas_11.jpg", "https://www.trusteddental.com.au/wp-content/uploads/2019/07/Treatment-room-microscope-1-1024x768.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJZ9zNMW7UQvM4NSm6Txet--OnfFnDAEY0GWmHOtCNxan_XNdG95FXi2c3QNUSDg6o5g&usqp=CAU"],
            "warehouse forklift operation": ["https://www.adaptalift.com.au/aalg-admin/resources/Blog/titleimage.jpg", "https://www.hflifttrucks.co.uk/wp-content/uploads/2018/10/forklift-dust-issues.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjuFqWwJy4exyGsevO03tva6dzB6ZXxYnJUz2GnFZbyCyULB2cLdhVFOuKQ7JULEf79ao&usqp=CAU"],
            "shipping container loading": ["https://www.tawi.com/wp-content/uploads/2019/03/2018-02-23-TAWI-01.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRpk4qm1FB6FH1jYDHDCefku2TVtk2hA33jp3LV5SL87_cZT_4jDbI0X-2oO9HdGwOWl4&usqp=CAU", "https://www.tawi.com/wp-content/uploads/2022/06/TAWI_PostNord_high-frequency-carbon-fibre-1-1216x812.jpg"],
            "retail store stocking posture": ["https://dorsumtech.com/cdn/shop/articles/Dylan_Stocking_Store_Shelves_BW.jpg?v=1705557618", "https://www.readyconvenience.com/wp-content/uploads/2023/07/08.15.23-The-Little-Things.jpg", "https://eu-images.contentstack.com/v3/assets/blt31d6b0704ba96e9d/blt3f5f76fc00b6ae85/63abec3baa2f59689e171f83/GettyImages-463871976-1.jpg?width=850&auto=webp&quality=95&format=jpg&disable=upscale"],
            "automotive mechanic engine repair": ["https://www.accidentwellness.com/assets/users/chiro/469/uploads/images/2018/07/mechanic.jpg", "https://di-uploads-pod14.dealerinspire.com/toyotaoforlando/uploads/2021/08/auto-repairs-1024x683.jpeg", "https://www.liveabout.com/thmb/NwHPHyBULga5taxTnVjict1DdzQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-522272311-5949bdc15f9b58d58a035319.jpg"],
            "tire changing": ["https://www.oldsmarautomotive.com/wp-content/uploads/2018/05/tire-rotation.jpg", "https://di-uploads-pod11.dealerinspire.com/volkswagenleessummit/uploads/2018/04/Tire-Service.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEo0o1UbiJZFGIhPmo3dIE2GEcSZAAl-Tb9SYS0sfDLtB-mC-bOWxj91vWhXo_R2iMRzY&usqp=CAU"],
            "car painting": ["https://www.autotrainingcentre.com/wp-content/uploads/2018/11/car-painting-courses.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQsoiK4fflLW65CLP20e49jfvCSR9Aa4keTimEvLXZnjvD-QfHeQGLia9MXaz9tCvb8F8&usqp=CAU", "https://media.wired.com/photos/5b580d1ecc6bec04807c887e/master/w_1600%2Cc_limit/CarPaint-20-w.jpg"],
            "conveyor belt operation": ["https://previews.agefotostock.com/previewimage/medibigoff/ca4c163c5232588cfd90dd664211f85d/cul-is09a899v.jpg", "https://previews.agefotostock.com/previewimage/medibigoff/969d55854b87bb596a11eeb8ba283359/civ-hx01973.jpg", "https://www.ppic.org/wp-content/uploads/warehouse-workers-with-boxes-on-conveyor-belt.jpg"],
            "inventory management": ["https://mecaluxcom.cdnwm.com/documents/d/global/m47p11-especialista-inventario-stock?e=jpg&imwidth=1024&imdensity=1", "https://mecaluxcom.cdnwm.com/documents/20128/535564/M37P11%20gestion-inventario-ecommerce-precision.jpg/ac4e20dd-3421-2c5b-abe5-1094b0b836e1?t=1685092924756&e=jpg&imwidth=1024&imdensity=1", "https://clarkstonconsulting.com/wp-content/uploads/2020/04/Top-8-Benefits-of-a-Warehouse-Management-System.png"],
            "hairstyling": ["https://images.squarespace-cdn.com/content/v1/61ec3612a3209127d473c6ff/1642870338312-4YV45ALN38CZIA6DXVJJ/image-asset.jpeg", "https://static.desygner.com/wp-content/uploads/sites/13/2019/11/07164536/Hairdresser-Header-1024x665.jpg", "https://zcoil.com/cdn/shop/articles/22ae9267afa92afaae2f6aa8cd338d7c.jpg?v=1699920379&width=640"],
            "facial makeup procedure": ["https://www.careersinfilm.com/wp-content/uploads/2019/03/makeup-artist.jpg", "https://eu-images.contentstack.com/v3/assets/blta88a1f2bfe4fea72/blt4f825f2cf65975ac/6262b243f454ac2a16206688/how-to-become-a-makeup-artist.jpg", "https://www.ziprecruiter.com/svc/fotomat/public-ziprecruiter/cms/681346362MakeupArtistProduction.jpg=ws1280x960"],
            "manicure": ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSomBLvTKjK6HvmA7CM0PCjD9CeBdEhFXOx_ltxw2HHGaHwaYAje-pdqTKZlPZ_VIBoUkM&usqp=CAU", "https://static.wixstatic.com/media/cdbe2e_582c53c3af86466aba8159e3fa6b541f~mv2_d_6016_4016_s_4_2.jpg/v1/fill/w_640,h_352,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/cdbe2e_582c53c3af86466aba8159e3fa6b541f~mv2_d_6016_4016_s_4_2.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzJlnJROV9DINo_Jgw4D5lDgVBYoFMJ-rHqoHhDaKM2g&s"],
            "pedicure": ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl502kJWiEQekBptvnICKiqJ3DKLy6u2bk77RkPY4IW2bN7k0F99q5Js4YA98JcO9oys4&usqp=CAU", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQc535ZwP3Vaxy6Y0Ocel9idwoh8sK09MBUQ-rKAnFhUUX3TO-BOo8PrQNcjdPRnB7ls68&usqp=CAU", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6VojRbN7nQHD0yCKjOJoAI1txk0lpwcRIXElCGioLNw&s"],
            "chopping": ["https://www.barefootphysiotherapy.com.au/wp-content/uploads/2019/05/Caitlin-cooking1.jpg", "https://images.everydayhealth.com/images/diet-nutrition/knife-skills-101-how-to-cut-complicated-fruits-and-veggies-00-722x406.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCa7FiEBAeO1v0YzBE8bg31EhNRP8VUAiO1mAOcqZgrQgNGTliNWXGgvH1QDJrqJrEvps&usqp=CAU"],
            "prep station": ["https://www.unileverfoodsolutions.co.in/wp-content/uploads/2023/09/good-posture.png", "https://qph.cf2.quoracdn.net/main-qimg-e8dedd2080a1971de4da1d3970e12ef9", "https://5.imimg.com/data5/SELLER/Default/2022/3/YN/YC/ZH/148640419/hire-chinese-chef-for-cafe-500x500.jpg"],
            "social media browsing": ["https://www.batteriesplus.com/4a5469/globalassets/blog/thumbnail/tech/phone-restart-thumb.jpg", "https://qph.cf2.quoracdn.net/main-qimg-881b96cdf0ab62a3af381b466e9a6abd-lq", "https://www.shutterstock.com/image-photo/correct-posture-avoid-backache-using-260nw-1921199429.jpg"],
            "video watching": ["https://media.licdn.com/dms/image/D5612AQFu_wmphyc-zg/article-cover_image-shrink_600_2000/0/1662562019155?e=2147483647&v=beta&t=rM5ZD17H7QEb2N0EaveCe4cDRCQg11LgZt35Lx9Cuzw", "https://blog.getinstacash.in/wp-content/uploads/2019/08/cropped-shutterstock_200408012.jpg", "https://t3.ftcdn.net/jpg/01/50/66/32/360_F_150663293_2bHM62KpAvN3XAPqY52vrz7Lsjaz3p7w.jpg"],
            "gaming": ["https://cdn.mos.cms.futurecdn.net/ZczenLdUoA6tiCBAYLsrTe-415-80.jpg", "https://img.mensxp.com/media/content/2023/Mar/Best-Gaming-Smartphones-in-India_64183e6e712f1.jpeg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzKrlZZ59im5CTQOwpfpl6fvpwQG4aZPI4UvyCm8s6LpegQgxAPSOSoGGLJF8JeyNnL2k&usqp=CAU"],
        };

        function updateSubcategories() {
            var categoriesDropdown = document.getElementById("categories");
            var subcategoriesDropdown = document.getElementById("subcategories");

            subcategoriesDropdown.options.length = 0; // Clear existing options

            if (categoriesDropdown.value === "driving") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Bike Riding", "Heavy Vehicle Driving", "Car Driving"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "manual-labour") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Construction Site Lifting", "Warehouse Pallet Handling", "Manufacturing Line Assembly"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "patient") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Elderly Care Lifting", "Hospital Bed-to-Chair Transfer", "Stretcher Handling"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "desk") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Office Desk Typing", "Call Center Desk"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "dental") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Dental Hygienist Cleaning Procedure", "Orthodontic Procedure", "Endodontic Procedure"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "material") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Warehouse Forklift Operation", "Shipping Container Loading", "Retail Store Stocking Posture"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "automotive") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Automotive Mechanic Engine Repair", "Tire Changing", "Car Painting"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "warehouse") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Conveyor Belt Operation", "Inventory Management"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "makeup") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Hairstyling", "Facial Makeup Procedure", "Manicure", "Pedicure"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "cooking") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Chopping", "Prep Station"];
                addSubcategories(subcategories);
            } else if (categoriesDropdown.value === "smartphone") {
                subcategoriesDropdown.style.display = "inline-block";
                var subcategories = ["Social Media Browsing", "Video Watching", "Gaming"];
                addSubcategories(subcategories);
            } else {
                subcategoriesDropdown.style.display = "none";
            }
        }

        function addSubcategories(subcategories) {
            var subcategoriesDropdown = document.getElementById("subcategories");
            for (var i = 0; i < subcategories.length; i++) {
                var option = document.createElement("option");
                option.text = subcategories[i];
                option.value = subcategories[i].toLowerCase();
                subcategoriesDropdown.add(option);
            }
        }

        function clearSelection() {
            document.getElementById("categories").selectedIndex = 0;
            document.getElementById("subcategories").options.length = 0;
            displayAllImagesWithSubcategory();
        }

        function displayAllImagesWithSubcategory() {
            var imageContainer = document.getElementById("imageContainer");
            imageContainer.innerHTML = ""; // Clear previous images

            Object.keys(images).forEach(function(subcategory) {
                var div = document.createElement("div");
                div.className = "boxx";

                images[subcategory].forEach(function(imageSrc) {
                    var img = document.createElement("img");
                    img.src = imageSrc;
                    div.appendChild(img);
                });

                var description = document.createElement("p");
                description.textContent = subcategory;
                description.className = "image-description";
                div.appendChild(description);

                imageContainer.appendChild(div);
            });

        }

        document.addEventListener("DOMContentLoaded", function() {
            displayAllImagesWithSubcategory();
        });

        document.getElementById("searchButton").addEventListener("click", function() {
            var category = document.getElementById("categories").value;
            var subcategory = document.getElementById("subcategories").value;
            var imagesForSubcategory = images[subcategory];
            displayImages(imagesForSubcategory);
        });

        function displayImages(imagesForSubcategory) {
            var imageContainer = document.getElementById("imageContainer");
            imageContainer.innerHTML = ""; // Clear previous images
            if (imagesForSubcategory && imagesForSubcategory.length > 0) {
                for (var i = 0; i < imagesForSubcategory.length; i++) {
                    var img = document.createElement("img");
                    img.src = imagesForSubcategory[i];
                    imageContainer.appendChild(img);

                    var description = document.createElement("p");
                    description.textContent = document.getElementById("subcategories").value;
                    description.className = "image-description";
                    imageContainer.appendChild(description);
                }
            } else {
                imageContainer.style.display = "none";
            }
        }

           </script>
    <audio autoplay controls style="display: none">
        <source src="{{url('/audio/explore-f.mp3')}}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    </x-app-layout>

