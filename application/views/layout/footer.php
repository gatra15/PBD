<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var menu_btn = document.querySelector("#menu-btn")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".my-container")
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
    })
</script>
	
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo base_url() ?>/assets/js/main.js"></script>
    </div>    
</body>
</html>