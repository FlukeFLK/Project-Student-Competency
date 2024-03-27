<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Competency Questionnaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .navbar {
            background-color: #41826E;
            color: #fff;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
        .nav-link{
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #41826E;">
        <div class="container">
            <a class="navbar-brand" href="home.php">Student Questionnaire</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="myprofile.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <?php
                    session_start();
                    if(isset($_SESSION['username'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="#">Welcome, ' . $_SESSION['username'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-5 mb-4">Student Competency Questionnaire</h1>
        <form id="questionnaireForm" action="process_questionnaire.php" method="post">
            <!-- Knowledge Topic -->
            <h2>Knowledge Topic</h2>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 1: ฉันมีความเข้าใจในพื้นฐานในสาขาวิชาของฉัน</label><br>
                <input type="radio" id="knowledge1_0" name="knowledge1" value="0">
                <label for="knowledge1_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="knowledge1_1" name="knowledge1" value="1">
                <label for="knowledge1_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="knowledge1_2" name="knowledge1" value="2">
                <label for="knowledge1_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="knowledge1_3" name="knowledge1" value="3">
                <label for="knowledge1_3">เห็นด้วย</label><br>
                <input type="radio" id="knowledge1_4" name="knowledge1" value="4">
                <label for="knowledge1_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 2: ฉันมีความเข้าใจในพื้นฐานในสาขาวิชาของฉัน</label><br>
                <input type="radio" id="knowledge2_0" name="knowledge2" value="0">
                <label for="knowledge2_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="knowledge2_1" name="knowledge2" value="1">
                <label for="knowledge2_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="knowledge2_2" name="knowledge2" value="2">
                <label for="knowledge2_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="knowledge2_3" name="knowledge2" value="3">
                <label for="knowledge2_3">เห็นด้วย</label><br>
                <input type="radio" id="knowledge2_4" name="knowledge2" value="4">
                <label for="knowledge2_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 3: ฉันค้นคว้าข้อมูลและทรัพยากรใหม่ๆ เพื่อขยายความรู้ของฉันอย่างเต็มที่</label><br>
                <input type="radio" id="knowledge3_0" name="knowledge3" value="0">
                <label for="knowledge3_0">ไม่เคย</label><br>
                <input type="radio" id="knowledge3_1" name="knowledge3" value="1">
                <label for="knowledge3_1">ไม่ค่อย</label><br>
                <input type="radio" id="knowledge3_2" name="knowledge3" value="2">
                <label for="knowledge3_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="knowledge3_3" name="knowledge3" value="3">
                <label for="knowledge3_3">บ่อยครั้ง</label><br>
                <input type="radio" id="knowledge3_4" name="knowledge3" value="4">
                <label for="knowledge3_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 4: ฉันสามารถอธิบายแนวคิดและทฤษฎีต่างๆ ให้ผู้อื่นเข้าใจได้อย่างชัดเจน</label><br>
                <input type="radio" id="knowledge4_0" name="knowledge4" value="0">
                <label for="knowledge4_0">ไม่เคย</label><br>
                <input type="radio" id="knowledge4_1" name="knowledge4" value="1">
                <label for="knowledge4_1">ไม่ค่อย</label><br>
                <input type="radio" id="knowledge4_2" name="knowledge4" value="2">
                <label for="knowledge4_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="knowledge4_3" name="knowledge4" value="3">
                <label for="knowledge4_3">บ่อยครั้ง</label><br>
                <input type="radio" id="knowledge4_4" name="knowledge4" value="4">
                <label for="knowledge4_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 5: ฉันมีส่วนร่วมในกิจกรรมทางวิชาการเช่น Seminar และ Workshop เพื่อเพิ่มความรู้ของฉัน</label><br>
                <input type="radio" id="knowledge5_0" name="knowledge5" value="0">
                <label for="knowledge5_0">ไม่เคย</label><br>
                <input type="radio" id="knowledge5_1" name="knowledge5" value="1">
                <label for="knowledge5_1">ไม่ค่อย</label><br>
                <input type="radio" id="knowledge5_2" name="knowledge5" value="2">
                <label for="knowledge5_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="knowledge5_3" name="knowledge5" value="3">
                <label for="knowledge5_3">บ่อยครั้ง</label><br>
                <input type="radio" id="knowledge5_4" name="knowledge5" value="4">
                <label for="knowledge5_4">เป็นประจำ</label><br>
            </div>
            <!-- Add more questions similarly -->

            <!-- Skill Topic -->
            <h2>Skill Topic</h2>
            <!-- Add questions for skill topic -->
            <!-- Example: -->
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 6: ฉันสามารถประยุกต์ใช้ทักษะของฉันในการทำงานและโปรเจกต์อย่างมีประสิทธิภาพ</label><br>
                <input type="radio" id="skill1_0" name="skill1" value="0">
                <label for="skill1_0">ไม่เคย</label><br>
                <input type="radio" id="skill1_1" name="skill1" value="1">
                <label for="skill1_1">ไม่ค่อย</label><br>
                <input type="radio" id="skill1_2" name="skill1" value="2">
                <label for="skill1_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="skill1_3" name="skill1" value="3">
                <label for="skill1_3">บ่อยครั้ง</label><br>
                <input type="radio" id="skill1_4" name="skill1" value="4">
                <label for="skill1_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 7: ฉันสามารถปรับทักษะของฉันให้เข้ากับบริบทหรือสถานการณ์ที่แตกต่างตามความต้องการ</label><br>
                <input type="radio" id="skill2_0" name="skill2" value="0">
                <label for="skill2_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="skill2_1" name="skill2" value="1">
                <label for="skill2_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="skill2_2" name="skill2" value="2">
                <label for="skill2_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="skill2_3" name="skill2" value="3">
                <label for="skill2_3">เห็นด้วย</label><br>
                <input type="radio" id="skill2_4" name="skill2" value="4">
                <label for="skill2_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 8: ฉันมั่นใจในความสามารถของฉันที่จะเรียนรู้และสร้างทักษะใหม่ได้อย่างรวดเร็ว</label><br>
                <input type="radio" id="skill3_0" name="skill3" value="0">
                <label for="skill3_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="skill3_1" name="skill3" value="1">
                <label for="skill3_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="skill3_2" name="skill3" value="2">
                <label for="skill3_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="skill3_3" name="skill3" value="3">
                <label for="skill3_3">เห็นด้วย</label><br>
                <input type="radio" id="skill3_4" name="skill3" value="4">
                <label for="skill3_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 9: ฉันตามหาโอกาสเพื่อเรียนรู้ทักษะและเทคนิคใหม่ๆ อย่างเต็มที่</label><br>
                <input type="radio" id="skill4_0" name="skill4" value="0">
                <label for="skill4_0">ไม่เคย</label><br>
                <input type="radio" id="skill4_1" name="skill4" value="1">
                <label for="skill4_1">ไม่ค่อย</label><br>
                <input type="radio" id="skill4_2" name="skill4" value="2">
                <label for="skill4_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="skill4_3" name="skill4" value="3">
                <label for="skill4_3">บ่อยครั้ง</label><br>
                <input type="radio" id="skill4_4" name="skill4" value="4">
                <label for="skill4_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 10: ฉันสามารถสื่อสารไอเดียหรือแนวคิดที่ซับซ้อนที่เกี่ยวข้องกับสาขาของฉันได้อย่างมีประสิทธิภาพ</label><br>
                <input type="radio" id="skill5_0" name="skill5" value="0">
                <label for="skill5_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="skill5_1" name="skill5" value="1">
                <label for="skill5_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="skill5_2" name="skill5" value="2">
                <label for="skill5_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="skill5_3" name="skill5" value="3">
                <label for="skill5_3">เห็นด้วย</label><br>
                <input type="radio" id="skill5_4" name="skill5" value="4">
                <label for="skill5_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <!-- Add more questions similarly -->
            <!-- Ability Topic -->
            <h2>Ability Topic</h2>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 11: ฉันสามารถทำงานในทีมอย่างมีประสิทธิภาพเพื่อบรรลุเป้าหมายร่วมกัน</label><br>
                <input type="radio" id="ability1_0" name="ability1" value="0">
                <label for="ability1_0">ไม่เคย</label><br>
                <input type="radio" id="ability1_1" name="ability1" value="1">
                <label for="ability1_1">ไม่ค่อย</label><br>
                <input type="radio" id="ability1_2" name="ability1" value="2">
                <label for="ability1_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="ability1_3" name="ability1" value="3">
                <label for="ability1_3">บ่อยครั้ง</label><br>
                <input type="radio" id="ability1_4" name="ability1" value="4">
                <label for="ability1_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 12: ฉันมีความสามารถในการแก้ปัญหาอย่างมีประสิทธิภาพและสามารถหาทางออกจากปัญหาที่ซับซ้อนได้</label><br>
                <input type="radio" id="ability2_0" name="ability2" value="0">
                <label for="ability2_0">ไม่เคย</label><br>
                <input type="radio" id="ability2_1" name="ability2" value="1">
                <label for="ability2_1">ไม่ค่อย</label><br>
                <input type="radio" id="ability2_2" name="ability2" value="2">
                <label for="ability2_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="ability2_3" name="ability2" value="3">
                <label for="ability2_3">บ่อยครั้ง</label><br>
                <input type="radio" id="ability2_4" name="ability2" value="4">
                <label for="ability2_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 13: ฉันเชี่ยวชาญในการจัดการเวลาของฉันอย่างมีประสิทธิภาพและการกำหนดลำดับความสำคัญให้กับงานอย่างมีประสิทธิภาพ</label><br>
                <input type="radio" id="ability3_0" name="ability3" value="0">
                <label for="ability3_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="ability3_1" name="ability3" value="1">
                <label for="ability3_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="ability3_2" name="ability3" value="2">
                <label for="ability3_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="ability3_3" name="ability3" value="3">
                <label for="ability3_3">เห็นด้วย</label><br>
                <input type="radio" id="ability3_4" name="ability3" value="4">
                <label for="ability3_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 14: ฉันสามารถเรียนรู้ทักษะใหม่ได้อย่างรวดเร็วและใช้งานได้อย่างมีประสิทธิภาพ</label><br>
                <input type="radio" id="ability4_0" name="ability4" value="0">
                <label for="ability4_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="ability4_1" name="ability4" value="1">
                <label for="ability4_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="ability4_2" name="ability4" value="2">
                <label for="ability4_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="ability4_3" name="ability4" value="3">
                <label for="ability4_3">เห็นด้วย</label><br>
                <input type="radio" id="ability4_4" name="ability4" value="4">
                <label for="ability4_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 15: ฉันเชี่ยวชาญในการจัดการกับความเครียดและความกดดันในสถานการณ์ที่ท้าทาย</label><br>
                <input type="radio" id="ability5_0" name="ability5" value="0">
                <label for="ability5_0">ไม่เห็นด้วยอย่างยิ่ง</label><br>
                <input type="radio" id="ability5_1" name="ability5" value="1">
                <label for="ability5_1">ไม่เห็นด้วย</label><br>
                <input type="radio" id="ability5_2" name="ability5" value="2">
                <label for="ability5_2">ไม่มีความเห็น</label><br>
                <input type="radio" id="ability5_3" name="ability5" value="3">
                <label for="ability5_3">เห็นด้วย</label><br>
                <input type="radio" id="ability5_4" name="ability5" value="4">
                <label for="ability5_4">เห็นด้วยอย่างยิ่ง</label><br>
            </div>
            <h2>Behavior Topic</h2>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 16: ฉันแสวงหาโอกาสเพื่อพัฒนาทักษะในการเป็นผู้นำและรับหน้าที่เป็นผู้นำเมื่อเหมาะสม</label><br>
                <input type="radio" id="behavior1_0" name="behavior1" value="0">
                <label for="behavior1_0">ไม่เคย</label><br>
                <input type="radio" id="behavior1_1" name="behavior1" value="1">
                <label for="behavior1_1">ไม่ค่อย</label><br>
                <input type="radio" id="behavior1_2" name="behavior1" value="2">
                <label for="behavior1_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="behavior1_3" name="behavior1" value="3">
                <label for="behavior1_3">บ่อยครั้ง</label><br>
                <input type="radio" id="behavior1_4" name="behavior1" value="4">
                <label for="behavior1_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 17: ฉันร่วมมือกับผู้อื่นได้อย่างมีประสิทธิภาพเพื่อประสบความสำเร็จร่วมกัน</label><br>
                <input type="radio" id="behavior2_0" name="behavior2" value="0">
                <label for="behavior2_0">ไม่เคย</label><br>
                <input type="radio" id="behavior2_1" name="behavior2" value="1">
                <label for="behavior2_1">ไม่ค่อย</label><br>
                <input type="radio" id="behavior2_2" name="behavior2" value="2">
                <label for="behavior2_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="behavior2_3" name="behavior2" value="3">
                <label for="behavior2_3">บ่อยครั้ง</label><br>
                <input type="radio" id="behavior2_4" name="behavior2" value="4">
                <label for="behavior2_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 18: ฉันแสดงความเห็นอกเห็นใจและเคารพต่อมุมมองและความเห็นของคนอื่น</label><br>
                <input type="radio" id="behavior3_0" name="behavior3" value="0">
                <label for="behavior3_0">ไม่เคย</label><br>
                <input type="radio" id="behavior3_1" name="behavior3" value="1">
                <label for="behavior3_1">ไม่ค่อย</label><br>
                <input type="radio" id="behavior3_2" name="behavior3" value="2">
                <label for="behavior3_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="behavior3_3" name="behavior3" value="3">
                <label for="behavior3_3">บ่อยครั้ง</label><br>
                <input type="radio" id="behavior3_4" name="behavior3" value="4">
                <label for="behavior3_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 19: ฉันสื่อสารได้อย่างมีประสิทธิภาพกับเพื่อนร่วมงาน อาจารย์ และผู้เชี่ยวชาญในสาขาของฉัน</label><br>
                <input type="radio" id="behavior4_0" name="behavior4" value="0">
                <label for="behavior4_0">ไม่เคย</label><br>
                <input type="radio" id="behavior4_1" name="behavior4" value="1">
                <label for="behavior4_1">ไม่ค่อย</label><br>
                <input type="radio" id="behavior4_2" name="behavior4" value="2">
                <label for="behavior4_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="behavior4_3" name="behavior4" value="3">
                <label for="behavior4_3">บ่อยครั้ง</label><br>
                <input type="radio" id="behavior4_4" name="behavior4" value="4">
                <label for="behavior4_4">เป็นประจำ</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">คำถามข้อที่ 20: ฉันแสวงหา feedback เพื่อปรับปรุงประสิทธิภาพและทักษะของฉัน</label><br>
                <input type="radio" id="behavior5_0" name="behavior5" value="0">
                <label for="behavior5_0">ไม่เคย</label><br>
                <input type="radio" id="behavior5_1" name="behavior5" value="1">
                <label for="behavior5_1">ไม่ค่อย</label><br>
                <input type="radio" id="behavior5_2" name="behavior5" value="2">
                <label for="behavior5_2">เป็นบางครั้ง</label><br>
                <input type="radio" id="behavior5_3" name="behavior5" value="3">
                <label for="behavior5_3">บ่อยครั้ง</label><br>
                <input type="radio" id="behavior5_4" name="behavior5" value="4">
                <label for="behavior5_4">เป็นประจำ</label><br>
            </div>


            <input type="hidden" id="knowledgeTotal" name="knowledgeTotal">
            <input type="hidden" id="skillTotal" name="skillTotal">
            <input type="hidden" id="abilityTotal" name="abilityTotal">
            <input type="hidden" id="behaviorTotal" name="behaviorTotal">

            <button type="button" onclick="calculateAndSubmit()" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        function calculateAndSubmit() {
            // Calculate total knowledge score
            var knowledgeTotal = 0;
            // Calculate total skill score
            var skillTotal = 0;
            var abilityTotal = 0;
            var behaviorTotal = 0;

            // Calculate knowledge total (example: assuming 5 questions)
            for (var i = 1; i <= 5; i++) {
                var knowledgeScore = parseInt(document.querySelector('input[name="knowledge' + i + '"]:checked').value);
                knowledgeTotal += knowledgeScore;
            }
            for (var i = 1; i <= 5; i++) {
                var skillScore = parseInt(document.querySelector('input[name="skill' + i + '"]:checked').value);
                skillTotal += skillScore;
            }
            for (var i = 1; i <= 5; i++) {
                var abilityScore = parseInt(document.querySelector('input[name="ability' + i + '"]:checked').value);
                abilityTotal += abilityScore;
            }
            for (var i = 1; i <= 5; i++) {
                var behaviorScore = parseInt(document.querySelector('input[name="behavior' + i + '"]:checked').value);
                behaviorTotal += behaviorScore;
            }

            // Set the calculated totals in the hidden input fields
            document.getElementById('knowledgeTotal').value = knowledgeTotal;
            document.getElementById('skillTotal').value = skillTotal;
            document.getElementById('abilityTotal').value = abilityTotal;
            document.getElementById('behaviorTotal').value = behaviorTotal;

            // Submit the form
            document.getElementById('questionnaireForm').submit();
        }
    </script>
</body>
</html>
