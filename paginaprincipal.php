<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilosprincipal.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <!--aqui construimremos la pagina web principal-->


    <h1 id="titulo"> Granja de cuyes </h1>
    <input type="button" value="Revelar nombre de dueño" onclick="cambiarnombre()">
<!--Todos los diseños de la pagina web connstruida con bootstrap-->
    <div class="luis">
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Registro diario
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Sanidad 
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Para acceder a la informacion de Sanida haga clik en <a href="paginaestadistica.php">Sanidad</a> <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Estadisticas
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
<div class="imagen">
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFRYYGBgaGhgcHBwcGBgYHBoaGhgZGRgaGhgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzErJSs0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NP/AABEIAL0BCwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgEHAP/EADgQAAEDAwIEAwcDBAICAwAAAAEAAhEDBCESMQVBUWETInEGMoGRobHwFELBFdHh8SNSYsIHM5L/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMABAX/xAAlEQACAgICAQQDAQEAAAAAAAAAAQIRAyESMUEEEyJRMmGRgaH/2gAMAwEAAhEDEQA/APRXFfSo6lNhQASaFxzl1xVb55LGLNWFW5y4ZhfSsY6FZKqDl9qWMTcVU4r5z1U+osYmXL5tQKovwh3vWMHGqOqpfWCEe9UOesYMdXVFR8oc1lE1FjNEyoEqt9YBBV7uCjYnEYscr6VSEmF5hTF4UOQygaDxAQg6zUuPEYUm34dzWTQzTLntXGjooGsFFrwSmEaJOcokSvnmFEOhYxIArsqOtRc9Y1HXqh7uik56pfVzgIGOl8boaq5WPqYzuoTIRQAcsG6jCvLVSsbs9EJXHP6Klz8LhqKdlKL2vwrfEQgeulyxgrUowhfGUmVpWAXOcqi9UvqKvX3WCFPfhDPdKodcckO+4zCNmoNdVEQqX1QltxcwYVVMVHnyNJ68vutZqDKt0BzQr+IAc0S3ghJl74HRvP4lVXPCqTQYaSe5JQaZlTBP1wndcqXJJhslLq5Yx2QfSVB/EgMBsBSllovHFYwqgn3zHplVOqMb39c/RKzeyf8AKl4g5bdd1CWWTKxxRQW+6PLCFq3DuZUHPJVTvzmp82U4Imbg8yVH9UR+BVuH5/lUvdjdNGbQHBMYs4g7H1TK2uwYk7rKF0cypNrO95pyPqumGb7ITw/Rs/GXXvWctuJSMnKObfagrckczjQ1Y+VLVlK6dzC6bozhazNB9UqgPVHjdV8KiZMVom90qLHqD3qPiDZZvYEXOcqtfZWahG6p0LWHRtnPwIUNaoY8RuoF8KRQMbU5qRuAUvfXEQqm1owFrMMnGQoB+lC+PAyVF9eUbME1K+EI6sVUahhVOdC1mom+v3hDvuROkZdyjKDuHl3lIMHmFqbG1axjS1gBgZjPzQWwgPDuGFzg+pPZu3zTS/utDRA5wj7anIkoK+tdfl64lPJPjSMq5bFzb8v933Riep5oa+vGtGSAT1RtWk1jWtbgCQO56+u6ScUtRBLd+ZM/KVyynKOrLxhF7E17WkzM/nql5qIOrfOa4gwY6TjMK1lYOE/nyUpcuy8a6Jucu06p/PzdcJlc05CnyGoMY7HqrCUHSdlFapS2NRF/dCVEW5sIdwhFMDQK9VAwiHtQlYKsRZFNzX0uB6/dG2N5qIBSy4bLD2yPghrOvtlWV9nLNJM2VF/OURrSGhe4jdHMuZwrxkn0QkhgXqyk9AB8K2nUnZEAdUIQtVpA8qrfVKsp1sQs2CkTouxlS8buhaz8qrxAsmwNGnFchWCpPNAm4XRUUyoa/HNQD0O6pjJQ9SuThsk9BlGzUMzVCgawSW5vXtEljoG+Clr+MY5g90LNRqnXIXXVJELK2fFYOTumrOJDGVk7NQY6n0ULJr/HZGonUMaiMc139QI3CY+z0aqtU+YU2Eju6CYHwH1TLs3g2gdjCDeckq20eXUmOdhzmhxA5Fwnn6oO7fAnpKrIRGV4txEtqaScNM+hwVRc3gIiCR23BOf5WX9qeNeG8kDUXPdz5CM/VT4bxI1WBzZbuD6+q8+cZXy8HfFxrj5JmwHiuP7KjC13Ma/2nsYkfJKLVjpLTjTMxyIMR9Cnbaz2OkmW8xvhDBoLnECJJMeu60sqcK8hjCpHGDEqWlS04UXLkky6R83dEtcqIwpMegpBoudnoqHnurNSoc9UixWV1iIQNV6Y06Dn+Y4b91ey3HID5JnmjHQvByM8ekboCjReP2P/APyVrqjCIkHrH53XwuDP5mefzVI500Snhsy3iwehCa8Ou5dlTunMePMBJ57EehSq4pOYJBlv1CvCa8HNPE0aSrWBGFGnXPVZ6jf4CuZdxsrcvshXgevrSuUqx5pZ+oK4bzkRhJKWxkq7Gz3kieSCNY9V116zTA3Q3iBHmgm1FMRuoagPVKKDLgjI+q74NxPuiOsqXvQ+xhlUMrvCLllOqdZiQQDyQdyyoG4yUiuv1ESWHmt7sH00FG6q1mEkNcIJnqF9UYxwBLW/ILzE3NZg91wM7o3+vVA0AkyUN+GPo2F5wOk4GGaTvIO3ooM4AyMOeTyys1R9oqxMCD6o2j7SVOjZHdBtrybQ5dwpgGHvHyWu9luHNbbhsk6nuJJ/dyg9sLzx/tOW++2esL0D2J4s2tbahjS9zY6bO/8AZWwycnsSaSWjSVTCScWdDfVML2vDZ/MJLe3QcAOqtNixjs809puBve8FkwTBjp1PVNuDcD8Jgacj7ndaS4piVW84UHtUdCe7FV3as0nH8JKGwU8v3wCkRK5M9KqOjHb7PtUr6FzSptK5GyyOu2UA5XRhCPxlZKwNlpd3VTGF57BcoS4wNuZTe3pNaBmPh/PwTSlxVIyVkWMhsdAuDCtcQSY7fYYXz252jZQbKFNQ4HX/AAgrlkQR3+6OecfX7BDVQDg/mf8ACrDsSQluW5xtv/dUeIczsd0bcCPN6H4QMfdAvbldsWRaFNzTLHby05H9kTa8QPMBWXVLUC35eqT6i0kFdUanH9nJkhxY8betIy1V1LlpHlmUua/GFUauUVAkxyzzCZ+Cp8chU2NyATKuwUjVM1WM72jdUDh7i3ruu/1eqGtPiEk425rcW1zRqtjE9CkfHvZTX5qeOcLnTjLUl/wpQjqcYuWAEwQtNw2o51IPfuUm4dwVzRFYz2RXG78U2BjcEiAuTMozkoQSu+0HiLOI8VAcW7hK69cPzGlwVLfNLoXWkftE9V3RxxgtdmCGP0t1ET3XbKCHO6bL5hgZ90qdMg+VvWUH0zNHdR1ecYW5/wDjy/DXPobagHM9ROPkfosRMuDXb8o5JjwayqMqggkkGRCeE1FmatHoXFeMaQWlp9Pul9rdF/mMrlxdOeBrYA6DO3zn5Ku2Y8+60n0hUcr8lPjx6GJegriuuVA/mIQNaRvlJKSRooHv6khL2MlE1s7oc1AAuHK+T0dEfijriuNKqa8nKrdVypcWPyCHPQriS6BuV2pVACK4RQnzn8CdLirBdsZWNoGgfndWmnjaIRVCniFIsnAUJbKrQAGHaM9vojrLhj6mwx1KacF4TqIe8Q0desEJnc3H7GCBsuvD6dKPKf8ADnnmd8Y/0QVuFNaQ1vnfj0n/AGqH+zb3EHAB+ndaqyosaJdv1Rr6rDsQuyGDG9v+HPLLOOkeYXnA35BYYED+0fRIbm1LTn85SvY7nS4ESOR/Pks/fcHpvaS7MfD59k0sEV+LDDM3+SPL3tjCXcQoyNQ3G/otdfcHDSdLtQ9P5SK5tyB1GVKEqlovOPKIholdqU4yu1WebSMK21Y7YiQutvycNboqt4lN6dRgAwltzTAOCqvDPVK0pbDs17eC1HPD2Px2Wgp16jQGGccyiLmm1nujzdlGjdE4e2R1XnTzpR2Ok1sqq1GsaXuOy894nempVLuU49E49rrpwIY3DVnWNk5MFW9LhSXuPtglJt0MqVu/SXQYIwiuDUAWkOMThdtarmsGefNEV2EMc88sqquTaFui13DsgM8zfVV0+GunW2IByOiHbxLU1rmnSRuF8ziDsnqoSjkTaQ62gmtbtBJ5nmjLfjbGNBEl2yXf1BhZMZG6ppcRo7lh+SChJ7aejaQVxL2ge8kAEd4Tv2TubgscWt1NJnzb94SB72vhwbAci7erUpQWOgDMclTnXijbZr61y+SDTce4gpFxHjGj3mPHq0q+l7YNY0FzfMd4RNpxijWyd94KLaq2FNoyFfi7nZaxwHcFDf1BwOYPbZenMuKBHmYAI5AJNxKtYuILiwxyiFovHL8Q8n5MW7jbTjYqu34iXOiB1mVqWWdg9+zMrtX2ZtXE+G/T1hyfjCugc5fZlri9OoN0nJAncZMLa8NohoA6Qltf2ZYyHMfOkg9dk6s2rl9RSpI6MLuwpw2hH8Ns9bgNkC1snvyW04Ja6WSRmFP02L3Jb6Q2bJxj+wa/fpApjEAT/ZLXujZHXjiSXO3/AI5JfWqtHqrZeTboSCSiUudO5Ves5ElSaWmTM/wl9xc53Cg7j2VVS6LLjUPMHf23RnBGCtSe4uJgkEdOnwSwvL5HL+UZ7Luc15byc0z8NvuF0enyJy4snmg1G0JuM2pY4gnpEd+fwkD4LP1rY+bbSZ/36rT+1VyWP0ubBGzv+wWa/UgoTuM3RSHygrMxeWx1xt1PbkqatwWjS35pvx2hADmmJws892V24nzimcOZcZMlTkoiFRQ1TIEpj4Z6BNJpDYlaNzfXLpNTkRgJHd8XqkaWt0zzRVe51t/5PKgK1AOjS74FefHHFbexeX2AuoOqz4hgjYoavwsgSD8UbXs3jIO28dFZa1nRkS0dVf3GlaejUmD0KT9J1EaWiVff3hNAMaJJ3hX3TWPaCDp6hW8PtAyTqBnYIe7S5Nf4K0J+B2wnzyB06oy7DA/y4HRMa1EsGpwEnZIKlXLnEznZLGTySbHTSVBjmAODgN9wg69FoBLdyduilSqEtmdkWHMPmyYGU9yizaZ22pw0EnbkiqV4HNc0jlhLf1LTqzuMIulTIa0xJKnOPl9hTAnUJI1GEws3afKBHfqhKwM9gj7W8DWEFoPdGSclQLQ9t+IlrRI1M59Ql/GOFUKrQ9gieY/lCm6c0tgeUjI5FVG8gkNwOhXNDFKLuOmHQPQ4VoD5BOMEL62YWw6SGnBBOU0t+Is2ccImvbMeMEEdlVZprckBRQpoVHteRTeXf+JK2ViJA5GPrCylXg51a2OiOi1XBMsaS6ZEzEFDM1KKki2C1JoccOtpe0d56hbgENbHZZ/gNEST8k24g8iIXT6ePDFf2SzPnk4me9oLgtEN3Jj7/LZIrOm4nO+5JnHQDp1Tu8AfM+o2weolJeKUHwCwS6T2+ql7i2XUX0X3T2sZ7wAG/UkrM1bkuf5Z0/FFDh1V5lw+c8uitZYR2+q5p8pO6KxqPkYcIplzfXn2kf5TzhVrD9XTHwOFnLfj9Jj20pgyATGPNt6bLR067mmRkdvzoqQi8TUpInKXJNIN4jw9lXyvaD+f5+q8v9qODm2eS33ScdiSP7r12g3UwOO+f7rL+1nDvGpvadzMHoRkH4EL05RjONnNim4y42eU164cC2pjvI3G0JAWZIn/ACmHEmubIdgzB+yAaCNxuhjXGOgZpXKmXW1bSr/GceaBmCrvFCLjYccqQ8fVJ1OdPZfUqTtOsZIOysNqXkwcA80S1pE6c8uy4nJdLsVl9G6ZGp7CDGYRjrGm9gLHaZ5FA21sXzJ23V9406GhhkrnlH5VF7Mgatw8sc2ZI6jIVD6BDi6cg4HQKNtfVGSCZ7HkqrxpLdZO/ILojyXxlv8AYGg7iILmtdqwk9O0kkNOe6MtiXW7hOW5S/h7/NqcY08uqONNJpeBnROu0hpAMQoU2O0HO6tv2tJ1AnSfuhHuiAJhWhtACaNNoaSd024fd7NAGyzjqpnA3TyyohrQ9wOqMKeaKSt/4FO9FxrUJc10tJ5q+jw0ObpD2u6cilX6dpfqdzRNKlLh2OIwldcdMzTGF3aPZA04A33SiowguJyQm99xV9MwMgDY5QLq7HguLS17vqlxWldG35F1JgnsfumNq0scDMjohG0w2C4wJwjLBwL3O/aNvVNkdxsyCrqo5jC3UdTjqEHICZ+yFw4tcx2TMjM7n6ZSe0AqvOqQ4HflHRNLOvTtGmo4EanaR1M7ujoFN/jx8jxlxdnp/A4GPn6oziOyU+zlYOZPPBn1WhewEFdcVeNIm5VO2ZV7TlV0DB/PyETd4cYQT281507i7R3RdoNe8RsPht9kA8xsP9K3UYyptaOX0R5ybBxSPOeMcJuRWJaxr2l7HA7ODh5dQcIO3In4L0CxpkMaHHJ3+gj6BENcPyCrKTfMPVXnl9xKJKMOLbNDQ/8ArCU8SZ0Hr9j/AAnDT5EHXpggjt/pegl8Tjv5WeO+3XCtJ8Vo2jVH3WKqHVmR2XrHH6Otj2nMhwPyj7ryWY3GUsSuXwzj6JGSVHSrdTTuF3S3ujZM1fErchszAnkqdekNAX1w17mxBwibW2DmEn9o+q4MkktlEMbdgZTe/t/CTC9BYIw4FFXVw51DQwS47+iWWFto81UEDeISY8dJuT3ejXsHrVHOl3VG8OplzCwjzHInkpuDXu1NIaEU6u0NIBl0bgbKspNrRm0VtoCk0gj3hBhJbix0mGu3ymNAPcPNq0t2nmrtLDJka4kIx5Q2/JrTEzaRDYdMKLmh5AymD6mpgiC4bhfN8rdWNSopbBRU+z0gSdkRRvnOGgDAxKv0uc3S6JKss2tYCx7fiN1Oelb2FfoBrthoa3J5qdKsQ5jY5hMrjg5DS5jpBGx3CUWVq/xWzO6SM4yi9mbD7+4AeWvbIjBSp1aDI6o2/cWvcTmTAUWW8uGpur0T40lFGckE16GsMM5P0UqtA6Q1vlAOT1V1wwsZDCJPXkpWNi54/wCRx7AKaX29CqSQRa5hoAB3J7BCe0lwHsy0+Uw0xy5phcONJgOmHux8Es8MvccOLYOoHGI5IQjUuT6Q3ZsfYPiodTaJy0aXDmCNl6DbVcQvD/ZGqaVZxJIY4RknecL1Ww4kCBO477rshJJ0DJFtcjvFm+aQEveJHRPqjGPG6UXFqWHsubNhalfgtjypxryD0t+X56olrp9PzoostTuACPXZWstSMgiPjP3U44X3Q7yx+zjaJJkZ+JTCjak7hfW1MbzCYNqADqurFgXbOfJmfSKg7SIlAXN1pBJ7f2Rdw6RuslxI1A54LhpAkYM7bTMFdDdISEeXbFvFbpo1GcZPoNyvLxSac7rSe096WNLZlzxEdG/uPxwFkC4tPRKk2PkaWg9tNo6Lss7IJtacGV94bP8Ashx+xeRo7W/e2S4ah6I9tYuBaBGrJ9Eqo37qjocAGjkFoODhj2vA97+FwZo8VbQb1ZGztQJI5DbrCjbXznAiowFswMIE3xFUNBiDEI65uWNdoAkblBQv8vKNvohd+Awai3HZCHjLWnTSpiTzKr4tRD9JDiGnkgxbPouY5o1gK2PBBq22whN5fVHkNGmZyFU6382feG6N4Qwve97m+ik5g1Odt1TqacmvpAdgVG2gk9VJ9PTkDbkiKNYOkt5LlJ+pwnrlDlbddjUUVg4w4f6R9BzHAF7SCOYUWXDWvIiW/ZQ0gvJb7oUZ7XlBQTUrsBMPdHRRp1fM0jnzhVupHUzVACnUAY6Q6T/1SaS49moruWEzBZvzVtvZFwl1Rg9EPb2geHtdguMtKBr06gOlrY04PdXg1VJ9CGgP6VoDS9z3dkTZcRpF+hjDI6rN2OlpeH4dEhPOC2w8M1HHJkD0Sy23ZmlRK9v/ABdQZALTCVV7isBpDHOB5hNLPhzGv1udic9EzueMMY2WM1pOXF0ti7Qk4fwOs9utzQHbMDnQM4JI5rT8GsazWgVHAkYka8j1IifikF/x+qBqbpaRmP8AKoocUc+rpL3umHnU6GNaBsPVUSlJWMnJ6s9F/UNYJc8CPj88rrOKsfgEu26c8/ZYLiZFWixweWB5c1pmAHTAJ+X1VNVjwaNRjX+I0im5rSTLiZmOeS6OxCsk6+TeyUlxZ6O2u3ZrD8T/AADhXeGwNLnOIPIArGXvHvAeKerW9o/5A0SG9BqGC7tyQ1b2vbpkgxy6fPZUSUTbZqzeuaYDpHf+6vo8RIHmysJZe0rapOkEeqvu/aIU2E9Fk5WFpGvueOU2HzSPiFivaH2saDDGuIPPl6SsXe8VqVXkk4OYnAQ7Lpze/UHIKZthWui+6ufGdqMByAfTcZ5xzRoFN5x5HfRVVbB7ct8w6hBaM3YJBGIXNP8A4n5KynUIOMHuiP6q4ftb8k4ND+24W2TofM8imHCrV1N+xAPyhJLGWjVJJlOOH8QeWVJzGAuLK3u9ocVceuW+OXU8ulXsoO0F73ebcBMOH0WVZLmieysuuCtaQQ53ochBZE6j9GugWwptqM0nB5BVcSoupsBBlpweyuYA3UQMjZMbhgqUfMNxlSWRwnS6bGAeEkuAjAKGuwRU0j3AZcUx4ZRAYB2Ofgsyazg97ZxJCfEuXJ/sLHFG6pM1FoEIStTg62ZDsr6w4c3JJJ7K+4fohoGEXDhLXkKdorsKZLnahEhWioG+VudP3QtBuHGTKFp1IcYWceTdgsY17xzmiRBad1VWqFwDo80LrXSUQaY0lbil0Ep4VcEu0uznB6JxfWh1B7PikNRsZBghNeBXjnHS4yFHKmvnH+CyQO/SXw5ueaf0iBSLGjACVcaoDUx3MkT3R/Eaxp0zp6BPdxQOxbVqeLLAYDefdDtoPZ5gS5AVrg6MYJ3IU+HcReQQTMLOEqbXX0NronWAf7zX46SrLKtQcS1rXSBnrCO4feF50uAPdSr27WPDmgAx0Se5Xxdr6pi9HafhilobOmSQCcgzOJV9jdQXBhLS5uJOZAjcKBDRDtIkmO3yU6dJuprgIM/dBZLT2wSdoV21sNep+RsQSRMdequubR9QYawBu0HHYRsquK++WjAE7LtF5/SvMmdW66eUqUr7BqgG24TcsLnBok9HDbn6IXitg+B5XCergR91Hgup9QAvdB3ynF9RYxzQGzHMklX+SdtoyoztCzMw7BUHUuROybX7QZxB6oa3YCJIzCbkw0BOpmMBX2dR7BIM9Qui4InAUuH0tTjmAeW6Pa2K6DPGpv8AeYA7qFP9LR6o6w4Ex0y4/JaCl7MUoGSk0Bpn/9k=">


</div>

</div>

    <script>
        
       function cambiarnombre(){var titulo=document.getElementById("titulo");
         titulo.innerHTML="Granja de cuyes de luis alberto";}


    </script>    
    <!--este es el codigophp-->
    <?php
    $nombre="crespani";
    
    try{
        $conexion=new PDO("mysql:host=localhost;dbname=basecuyes","root","");
        $statement=$conexion->prepare("select nomcuy from cuyes");
        $statement->execute();
        $resultado=$statement->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($resultado as $llave) {
          if ($llave['nomcuy']==$nombre){echo "Si esta en la base de datos";
            break;
          # code...
        }
        
    
    }
    $sintoma="diarrea";
    $sintoma2="embalonamiento";
    $command=escapeshellcmd('python diagnosticoEnfermedad.py ');
    $retornopython=shell_exec($command." ".$sintoma." ".$sintoma2);
    echo $retornopython;
  echo"No est en la base de datows";}
    catch(Exception $e)
    {echo"El erro esta en la linea" .$e->getMessage();}


    ?>
</body>
</html>