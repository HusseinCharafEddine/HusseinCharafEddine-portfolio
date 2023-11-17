document.addEventListener("DOMContentLoaded", function () {
  const skillsSection = document.getElementById("skills");
  const javaSkill = document.querySelector(".java");
  const kotlinSkill = document.querySelector(".kotlin");
  const nodejsSkill = document.querySelector(".nodejs");
  const htmlSkill = document.querySelector(".html");
  const cssSkill = document.querySelector(".css");
  const jsSkill = document.querySelector(".js");
  const mysqlSkill = document.querySelector(".mysql");

  function restartAnimations(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        javaSkill.style.animation = "none";
        kotlinSkill.style.animation = "none";
        nodejsSkill.style.animation = "none";
        htmlSkill.style.animation = "none";
        cssSkill.style.animation = "none";
        jsSkill.style.animation = "none";
        mysqlSkill.style.animation = "none";

        void javaSkill.offsetWidth;
        void kotlinSkill.offsetWidth;
        void nodejsSkill.offsetWidth;
        void htmlSkill.offsetWidth;
        void cssSkill.offsetWidth;
        void jsSkill.offsetWidth;
        void mysqlSkill.offsetWidth;

        javaSkill.style.animation = "java 2s linear forwards";
        kotlinSkill.style.animation = "kotlin 2s linear forwards";
        nodejsSkill.style.animation = "nodejs 2s linear forwards";
        htmlSkill.style.animation = "html 2s linear forwards";
        cssSkill.style.animation = "css 2s linear forwards";
        jsSkill.style.animation = "js 2s linear forwards";
        mysqlSkill.style.animation = "mysql 2s linear forwards";
      }
    });
  }

  const observer = new IntersectionObserver(restartAnimations, {
    threshold: 0.2,
  });

  observer.observe(skillsSection);
});
v;
