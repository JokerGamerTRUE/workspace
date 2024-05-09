<?php require_once "actions/file/store.php"?>
<!doctype html>
<html lang="en">
<head>
    <?php include_once "layout/header.html"?>
    <link href="/style/css/FileUpload.css" rel="stylesheet">
    <title>Upload your file</title>
</head>
<body>
<div>
    <?php include_once "layout/nav-bar.php"?>

    <div class="container py-5">
        <div align="center">
            <div class="d-none">
                <a href="/">
                    <img src="assets/images/logo.png" width="250">
                </a>
                <hr class="text-white opacity-100 border border-3 rounded-pill">
            </div>
            <?php require_once "layout/buttons-bar.php"?>
            <div class="w-100">
                <?php require_once 'layout/alerts.php'?>
            </div>
            <div class="text-end text-white fw-bold" dir="rtl">
                <h3 class="text-white">Test cases</h3>
                <div class="d-flex flex-wrap justify-content-start align-items-center bg-secondary bg-opacity-25 rounded-4 p-3">
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تنفيذ ضوابط الوصول يحمي بيانات العملاء ويقلل من فرص التسريبات والاختراقات الإلكترونية.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تنفيذ ضوابط الوصول يحمي بيانات العملاء ويقلل من فرص التسريبات والاختراقات الإلكترونية.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تنفذ الحكومة إجراءات دفاعية لمكافحة التهديدات الإرهابية وتأمين الحدود.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        توجيه الرسالة الداخلية يسهم في توجيه العاملين نحو أهداف واضحة ومحددة للشركة.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تسعى الحكومة إلى تطوير قوانين وسياسات لحماية البيانات الشخصية.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تم تحسين الكفاءة التشغيلية في المنشآت الوطنية من خلال تحسين البنية التحتية والموارد الطبيعية.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تصميم أنظمة جدار الحماية يعزز من مستوى الأمان الإلكتروني ويقلل من فرص التسريبات البيانات.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تسلط الدراسات الاقتصادية الضوء على أثر الأحداث السياسية على النمو الاقتصادي.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تبرز الإجراءات الدفاعية ضرورة تكثيف الجهود لمكافحة التهديدات الإرهابية وتحقيق الاستقرار السياسي.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تعكس الإجراءات الدفاعية الجهود المبذولة لمكافحة التهديدات الإرهابية وتعزيز الاستقرار.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        يجب على المؤسسات توفير التدريب اللازم للموظفين للتعامل مع التهديدات السيبرانية.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تُظهر السياسات الأمنية الحاجة إلى تعزيز القدرات للتصدي للتهديدات الإرهابية وتحقيق الاستقرار.
                    </a>
                    <a href="#" class="btn btn-primary fw-bold rounded-pill m-2" onclick="SubmitForm(this)">
                        تطبيق قرارات إدارية جديدة يعكس التزام الشركة بتحسين عملياتها وتعزيز كفاءتها وتحفيز موظفيها.
                    </a>
                </div>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <h6 class="text-white text-center">Required (docx, txt)</h6>
                <div id="card-upload" class="d-flex justify-content-between align-content-center bg-white bg-opacity-50 rounded-pill py-2 cursor-pointer mt-4" style="width: 500px;max-width: 100%">

                    <div class="my-auto" onclick="ClickEvent('input_file')">
                        <h5 class="ms-3">
                            Upload File
                            <i class="fa-solid fa-plus"></i>
                        </h5>
                    </div>
                    <div class="my-auto" onclick="ClickEvent('input_file')">
                        <h5 id="input_context">File name ******</h5>
                    </div>
                    <div class="my-auto me-3">
                        <i class="fa-solid fa-circle-arrow-right fa-2x" onclick="ClickEvent('sub-btn')"></i>
                        <input type="submit" name="file" id="sub-btn" class="visually-hidden">
                    </div>
                </div>
                <input type="file" name="text_file" hidden accept=".docx,.txt" id="input_file" class="visually-hidden">
            </form>
            <form class="opacity-0" method="post" action="" enctype="multipart/form-data">
                    <textarea name="content" id="content" style="width: 1px;height: 1px;cursor: auto"></textarea>
                    <input type="submit" id="sub-btn-form" style="width: 1px;height: 1px;cursor: auto">
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "layout/footer.html"?>
<script src="/style/js/FileUpload.js"></script>
<script src="/style/js/SubmitForm.js"></script>
</body>
</html>