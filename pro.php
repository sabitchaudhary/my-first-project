<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
}

body {
  display: flex;
  justify-content: center;
  align-content: center;
  padding: 6rem;
  background-color: #f5f5f5;
  font-family: "Inter", sans-serif;
}
@media (max-width: 60em) {
  body {
    padding: 3rem;
  }
}

.grid {
  display: grid;
  width: 114rem;
  grid-gap: 6rem;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  align-items: start;
}
@media (max-width: 60em) {
  .grid {
    grid-gap: 3rem;
  }
}
.grid__item {
  background-color: #fff;
  border-radius: 0.4rem;
  overflow: hidden;
  box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.2s;
}
.grid__item:hover {
  transform: translateY(-0.5%);
  box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.2);
}

.card__img {
  display: block;
  width: 100%;
  height: 18rem;
  object-fit: cover;
}
.card__content {
  padding: 3rem 3rem;
}
.card__header {
  font-size: 3rem;
  font-weight: 500;
  color: #0d0d0d;
  margin-bottom: 1.5rem;
}
.card__text {
  font-size: 1.5rem;
  letter-spacing: 0.1rem;
  line-height: 1.7;
  color: #3d3d3d;
  margin-bottom: 2.5rem;
}
.card__btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 2rem;
  text-align: center;
  color: #3363ff;
  background-color: #e6ecff;
  border: none;
  border-radius: 0.4rem;
  transition: 0.2s;
  cursor: pointer;
}
.card__btn span {
  margin-left: 1rem;
  transition: 0.2s;
}
.card__btn:hover, .card__btn:active {
  background-color: #dce4ff;
}
.card__btn:hover span, .card__btn:active span {
  margin-left: 1.5rem;
}
	</style>
</head>
<body>
		<div class="grid">
  <div class="grid__item">
    <div class="card"><img class="card__img" src="img/1.jpg ">
      <div class="card__content">
        <h1 class="card__header">Mushroom Farming</h1>
        <p class="card__text"> Agriculture Student of <strong>Sarswati Secondary School Gobardiha</strong> Produces Very High Quality of Mushroom Organically </p>
        <button class="card__btn">Click Here to Buy  <span>&rarr;</span></button>
      </div>
    </div>
  </div>
  <div class="grid__item">
    <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1485160497022-3e09382fb310?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Desert">
      <div class="card__content">
        <h1 class="card__header">Misty mornings</h1>
        <p class="card__text">Capture the stunning <strong>essence</strong> of the early morning sunrise in the Californian wilderness.</p>
        <button class="card__btn">Explore <span>&rarr;</span></button>
      </div>
    </div>
  </div>
  <div class="grid__item">
    <div class="card"><img class="card__img" src="https://images.unsplash.com/photo-1506318164473-2dfd3ede3623?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3300&amp;q=80" alt="Canyons">
      <div class="card__content">
        <h1 class="card__header">Utah sunsets</h1>
        <p class="card__text">Sunsets over the <strong>stunning</strong> Utah Canyonlands, is truly something much more than incredible.</p>
        <button class="card__btn">Explore <span>&rarr;</span></button>
      </div>
    </div>
  </div>
</div>

</body>

</html>
