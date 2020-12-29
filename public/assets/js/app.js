window.onload = function () {
    const vcfInput = document.querySelector("#file");
    const progress = document.querySelector("#file-load");
    const blocInfo = document.querySelector("#file-info");
    const textName = document.querySelector("#name");
    const textTaille = document.querySelector("#taille");
    const textType = document.querySelector("#type");

    progress.classList.add('d-none');
    blocInfo.classList.add('d-none');
    progress.parentNode.classList.add('d-none');

    vcfInput.addEventListener('change', function (e) {

      progress.parentNode.classList.remove('d-none');
      progress.classList.remove('d-none');

      if (!blocInfo.classList.contains("d-none")) {
        blocInfo.classList.add('d-none');
      }

      let vcf = vcfInput.files[0];
      let timeOut = vcf.size / 1000000;
      let timeIn = 0;
      let percent = 0;
      let downloaded = false;

      const timer = setInterval(() => {
        progress.style.width = percent + '%';
        ++percent;

        if (percent >= 100) {
          downloaded = true;
          loadFunction();
          clearInterval(timer)
        }
      }, timeOut)

      const loadFunction = function () {
        if (downloaded) {
          setTimeout(() => {
            progress.style.width = '100%';
          }, timeOut)

          setTimeout(() => {

            if (!progress.parentNode.classList.contains("d-none")) {
                progress.classList.add('d-none');
                progress.parentNode.classList.add('d-none');
            }

            blocInfo.classList.remove('d-none');

            textName.innerText = 'Nom: ' + vcf.name;
            textType.innerText = 'Type: ' + vcf.type;
            sizing(vcf.size)

          }, timeOut*2)
        }
      }

      let calcul = function (fileSize, number) {
          let integer = Math.trunc(fileSize / number);
          let decimal = (fileSize / number) - integer;
          decimal = decimal.toString();

          decimal = decimal.replace('0.', '');
          if(decimal.length > 3) {

            let char = decimal.charAt(3)
            char = parseInt(char);
            if (char >= 5) {
              let val = parseInt(decimal.charAt(2)) + 1
              decimal = '0.' + decimal.substr(0, 2) + val
            } else {
              decimal = '0.' + decimal.substr(0, 2) + decimal.charAt(2)
            }
          }
          return parseFloat((parseFloat(integer) + parseFloat(decimal)))
      }

      let sizing = function (size) {
        size = parseFloat(size)
        let filesize = 0;
        if (size < 1001) {
          fileSize = calcul(size, 1000);
          textTaille.innerText = 'Taille: ' + filesize + ' Ko'
        } else if(size >= 1000000) {
          fileSize = calcul(size, 1000000)
          textTaille.innerText = 'Taille: ' + filesize + ' Mo'
        }
      }

    })
  }