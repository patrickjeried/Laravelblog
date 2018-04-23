<style >
	#footer {
		padding: 6em 0 4em 0 ;
		background-color: #1d242a;
		text-align: center;
	}

		#footer .icons {
			font-size: 1.25em;
		}

			#footer .icons a {
				color: rgba(255, 255, 255, 0.5);
			}

				#footer .icons a:hover {
					color: #fff;
				}

		#footer .copyright {
			color: rgba(255, 255, 255, 0.5);
			font-size: 0.8em;
			letter-spacing: 0.225em;
			list-style: none;
			padding: 0;
			text-transform: uppercase;
		}

			#footer .copyright li {
				border-left: solid 1px rgba(255, 255, 255, 0.5);
				display: inline-block;
				line-height: 1em;
				margin-left: 1em;
				padding-left: 1em;
			}

				#footer .copyright li:first-child {
					border-left: 0;
					margin-left: 0;
					padding-left: 0;
				}

				#footer .copyright li a {
					color: inherit;
				}

					#footer .copyright li a:hover {
						color: #fff;
					}

				@media screen and (max-width: 480px) {

					#footer .copyright li {
						border: 0;
						display: block;
						line-height: 1.65em;
						margin: 0;
						padding: 0.5em 0;
					}

				}
</style>
<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy;</li><li>By: <a href="">Pat</a></li>
						</ul>
</footer>


@endsection