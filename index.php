<?php require_once('include/header.php'); ?>

<div class="main-banner" style="background-image: url(assets/images/banner-image.jpg);">
	<div class="container">
		<div class="row">
			<div class="xs-12 md-12 _headline">
				<div class="headline">
					<div class="banner-content">
						<h1 class="h1-title page-title">Word Finder & Scrabble Cheat</h1>
						<div class="banner-form">
							<div class="banner-input-wrap">
								<input type="text" class="input" placeholder="ENTER LETTERS">
								<button type="submit" class="btn-search">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>  
		</div>
	</div>
</div>

<div class="main-content">

	<div class="main-filter-result">
		<div class="container">
			<div class="filter-result-wrap">
				<div class="row">
					<div class="xs-12">
						<div class="filter-result-btn-wrap">
							<button class="result-btn">
								<i class="fa fa-cogs" aria-hidden="true"></i>
								<span class="result-btn-text">Filter Result</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="advanced-search-edit-panel" style="display: none;">
				<div class="row">
					<div class="xs-12 md-3">
						<div class="advanced-search-control">
							<label>Starts with</label> 
							<span class="help-button wficon-help-circle">
								<i class="fa fa-question" aria-hidden="true"></i>
							</span>
							<input type="text" placeholder="A">
						</div>
					</div>
					<div class="xs-12 md-3">
						<div class="advanced-search-control">
							<label>Contains</label> 
							<span class="help-button wficon-help-circle">
								<i class="fa fa-question" aria-hidden="true"></i>
							</span>
							<input type="text" placeholder="A_B">
						</div>
					</div>
					<div class="xs-12 md-3">
						<div class="advanced-search-control">
							<label>Ends in</label> 
							<span class="help-button wficon-help-circle">
								<i class="fa fa-question" aria-hidden="true"></i>
							</span>
							<input type="text" placeholder="B">
						</div>
					</div>
					<div class="xs-12 md-3">
						<div class="edit-panel-submit-button-wrap">
							<button class="edit-panel-submit-button">Filter</button>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="main-result-table">
			<div class="container">
				<div class="row">
					<div class="xs-12">
						<h1 class="widget title">
							<span class="first">77 words</span> 
							<span class="middle">with letters</span>
							<span class="last">Result</span>
						</h1>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-12">
						<div class="result-table-container result-table-container-6">
							<div class="result-table-header result-table-header-color6">
								<div class="table-header-text">
									<span class="text-number">6</span>
									<span class="text">Letter Words</span>
								</div>
							</div>
							<div class="result-table-wrapper">
								<table>
									<thead class="thead-color6">
										<tr>
											<th class="table-cell-word" colspan="1">
												<a class="inner-header-link">words</a>
											</th>
											<th class="table-cell-scrabble_scored" colspan="1">
												<a class="inner-header-link">Scrabble®</a>
											</th>
											<th class="table-cell-wwf_score" colspan="2">
												<a class="inner-header-link">Words With Friends®</a>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">word</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">56</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">30</span>
											</td> 
											<td class="more-options-cell">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">words</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">05</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">12</span>
											</td> 
											<td class="more-options-cell">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-12">
						<div class="result-table-container result-table-container-5">
							<div class="result-table-header result-table-header-color5">
								<div class="table-header-text">
									<span class="text-number">5</span>
									<span class="text">Letter Words</span>
								</div>
							</div>
							<div class="result-table-wrapper">
								<table>
									<thead class="thead-color5">
										<tr>
											<th class="table-cell-word" colspan="1">
												<a class="inner-header-link">words</a>
											</th>
											<th class="table-cell-scrabble_scored" colspan="1">
												<a class="inner-header-link">Scrabble®</a>
											</th>
											<th class="table-cell-wwf_score" colspan="2">
												<a class="inner-header-link">Words With Friends®</a>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url"> 
													<span class="td-span">word</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">40</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">21</span>
											</td> 
											<td class="more-options-cell more-options-open">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">words</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">20</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">30</span>
											</td> 
											<td class="more-options-cell">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-12">
						<div class="result-table-container result-table-container-4">
							<div class="result-table-header result-table-header-color4">
								<div class="table-header-text">
									<span class="text-number">4</span>
									<span class="text">Letter Words</span>
								</div>
							</div>
							<div class="result-table-wrapper">
								<table>
									<thead class="thead-color4">
										<tr>
											<th class="table-cell-word" colspan="1">
												<a class="inner-header-link">words</a>
											</th>
											<th class="table-cell-scrabble_scored" colspan="1">
												<a class="inner-header-link">Scrabble®</a>
											</th>
											<th class="table-cell-wwf_score" colspan="2">
												<a class="inner-header-link">Words With Friends®</a>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">word</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">25</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">35</span>
											</td> 
											<td class="more-options-cell more-options-open">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word" class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">words</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">20</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">30</span>
											</td> 
											<td class="more-options-cell">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-12">
						<div class="result-table-container result-table-container-3">
							<div class="result-table-header result-table-header-color3">
								<div class="table-header-text">
									<span class="text-number">3</span>
									<span class="text">Letter Words</span>
								</div>
							</div>
							<div class="result-table-wrapper">
								<table>
									<thead class="thead-color3">
										<tr>
											<th class="table-cell-word" colspan="1">
												<a class="inner-header-link">words</a>
											</th>
											<th class="table-cell-scrabble_scored" colspan="1">
												<a class="inner-header-link">Scrabble®</a>
											</th>
											<th class="table-cell-wwf_score" colspan="2">
												<a class="inner-header-link">Words With Friends®</a>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">word</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">25</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">35</span>
											</td> 
											<td class="more-options-cell more-options-open">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">words</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">20</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">30</span>
											</td> 
											<td class="more-options-cell">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word"  class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-12">
						<div class="result-table-container result-table-container-2">
							<div class="result-table-header result-table-header-color2">
								<div class="table-header-text">
									<span class="text-number">2</span>
									<span class="text">Letter Words</span>
								</div>
							</div>
							<div class="result-table-wrapper">
								<table>
									<thead class="thead-color2">
										<tr>
											<th class="table-cell-word" colspan="1">
												<a class="inner-header-link">words</a>
											</th>
											<th class="table-cell-scrabble_scored" colspan="1">
												<a class="inner-header-link">Scrabble®</a>
											</th>
											<th class="table-cell-wwf_score" colspan="2">
												<a class="inner-header-link">Words With Friends®</a>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">word</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">25</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">35</span>
											</td> 
											<td class="more-options-cell more-options-open">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word" class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
										<tr class="table-row">
											<td class="table-cell-word">
												<a target="_blank" href="#" class="has-definition" itemprop="url">
													<span class="td-span">words</span>
												</a>
											</td>
											<td class="table-cell-scrabble_score">
												<span class="td-span">20</span>
											</td>
											<td class="table-cell-wwf_score">
												<span class="td-span">30</span>
											</td> 
											<td class="more-options-cell">
												<a class="more-options-link">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="more-options-menu" style="display: none;">
													<a title="Save word" class="more-menu-link">
														<i class="fa fa-heart-o" aria-hidden="true"></i> 
														<span class="link-text">Save word</span>
													</a>
													<a href="#" title="See saved words" class="more-menu-link" itemprop="url">
														<i class="fa fa-bars" aria-hidden="true"></i>
														<span class="link-text">See saved words</span>
													</a>
													<a target="_blank" href="#" title="Read definition" class="more-menu-link" itemprop="url">
														<i class="fa fa-search" aria-hidden="true"></i>
														<span class="link-text">Read definition</span>
													</a>
													<a target="_blank" href="#" title="See related words" class="more-menu-link" itemprop="url">
														<i class="fa fa-file-text-o" aria-hidden="true"></i>
														<span class="link-text">See related words</span>
													</a>
													<a title="Report invalid word" class="more-menu-link">
														<i class="fa fa-flag-o" aria-hidden="true"></i>
														<span class="link-text">Report invalid word</span>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="container">
		<div class="row">
			<div class="lg-12 _headline" itemscope itemtype="http://schema.org/Article">
				<div itemprop="headline" class="headline">
					<h1 class="h2-title">Article Title</h1>
				</div>
				<div itemprop="articleBody" class="Check-Number-right">
					<p>Find the perfect surname for a fictional character or alias. Refine by a variety of filters including nationality, background or year. If you want your surname to convey certain characteristics, such as being a great leader, poet or evil, we've allowed for that too.</p>	
				</div>
				<meta itemprop="mainEntityOfPage" content="http://dev.fakedetail.com/last_name/"/>
				<meta itemprop="headline" content="Credit Card Generator"/>
				<div itemprop="author" itemscope itemtype="https://schema.org/Person">
					<meta itemprop="name" content="Credit Card Generator"/>
				</div>
				<meta itemprop="alternativeHeadline" content=""/>
				<div  itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<meta itemprop="url" content="<?php echo $base_url; ?>/asserts/images/cardlogo.png"/>
					<meta itemprop="width" content="740"/><meta itemprop="height" content="393"/>
				</div>
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
					<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						<meta itemprop="url" content="<?php echo $base_url; ?>/asserts/images/cardlogo.png"/>
						<meta itemprop="width" content="250"/>
						<meta itemprop="height" content="60"/>
					</div>
					<meta itemprop="name" content="Reliablesoft"/>
				</div>
				<meta itemprop="description" content=""/>
				<meta itemprop="datePublished" content="May 7, 2015"/>
				<meta itemprop="dateModified" content="November 08, 2018"/>
			</div>
		</div>
	</div>


	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="xs-12 md-12">
					<div class="description">

						<p>Stuck in Scrabble? Chomped in Word Chums? Making enemies in Words With Friends? YourDictionary’s Word Finder is the cheat tool that will help you wipe out the competition.</p>
						<p>Type in the letters you want and our word finder will show you all the possible words you can make from the letters in your hand, or find words you can play later. The Word Finder word search unscrambles your letters, searches our Scrabble dictionary for words that win, and gives them to you sorted by word length and point value.</p>
						<p>Whether your game is 
							<a href="#" title="Scrabble" itemprop="url">Scrabble</a>, 
							<a href="#" title="Words With Friends" itemprop="url">Words With Friends</a>, 
							<a href="#" title="Word Cookies Cheats" itemprop="url">Word Cookies Cheats</a>, 
							Word Chums, 
							<a href="#" title="4 Pics 1 Word" itemprop="url">4 Pics 1 Word</a>, 
							<a href="#" title="word jumble" itemprop="url">word jumble</a>, 
							or just a daily crossword, Word Finder has the cheats you need. Happy puzzling!
						</p>
						<p>Need more help? No problem. Word Finder also provides word lists full of power plays that will take your word game skills to the next level. Word Finder has an unbeatable collection of 
							<a href="#" title="word lists for word games" itemprop="url">word lists for word games</a>
							. Browse to find those high-scoring words, or if you know which letters you need help with, try:
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="xs-12 md-4">
					<div class="description-link-box">
						<ul>
							<li>
								<a href="#" title="Words with the Letter Q" itemprop="url" target="_blank">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span>Words with the Letter Q</span>
								</a>
							</li> 
							<li>
								<a href="#" title="Words with the Letter X" itemprop="url" target="_blank">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span>Words with the Letter X</span>
								</a>
							</li> 
							<li>
								<a href="#" title="Consonant Words" itemprop="url" target="_blank">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span>Consonant Words</span>
								</a>
							</li> 
							<li>
								<a href="#" title="Vowel Words" itemprop="url" target="_blank">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span>Vowel Words</span>
								</a>
							</li> 
							<li>
								<a href="#" title="2 Letter Words" itemprop="url" target="_blank">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span>2 Letter Words</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-words-index">
		<div class="container">

			<div class="words-index-title">
				<div class="row">
					<div class="xs-12 md-12">
						<div class="index-title">
							<h1>
								<a href="#" itemprop="url" title="Word Lists for Playing Scrabble®">Word Lists for Playing Scrabble®</a>
							</h1>
						</div>
					</div>
				</div>
			</div>

			<div class="words-index-content">
				<div class="row">
					<div class="xs-12 md-6">
						<div class="word-list">
							<div class="word-list-first">
								<h3>
									<a href="#" itemprop="url" title="Words with the Letter...">Words with the Letter...</a>
								</h3>
							</div>
							<ul class="word-list-urls" id="words-with-letters">
								<li class="active">
									<a href="#" itemprop="url" title="Words with the letter q">Words with the letter <span>q</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words with the letter z">Words with the letter <span>z</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words with the letter x">Words with the letter <span>x</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words with the letter j">Words with the letter <span>j</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words with the letter v">Words with the letter <span>v</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter a">Words with the letter <span>a</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter b">Words with the letter <span>b</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter c">Words with the letter <span>c</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter d">Words with the letter <span>d</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter e">Words with the letter <span>e</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter f">Words with the letter <span>f</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter g">Words with the letter <span>g</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter h">Words with the letter <span>h</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter i">Words with the letter <span>i</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter k">Words with the letter <span>k</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter l">Words with the letter <span>l</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter m">Words with the letter <span>m</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter n">Words with the letter <span>n</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter o">Words with the letter <span>o</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter p">Words with the letter <span>p</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter r">Words with the letter <span>r</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter t">Words with the letter <span>t</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter u">Words with the letter <span>u</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter w">Words with the letter <span>w</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with the letter y">Words with the letter <span>y</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with z and q">Words with <span>z</span> and <span>q</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with q and j">Words with <span>q</span> and <span>j</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with q and h">Words with <span>q</span> and <span>h</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with z and j">Words with <span>z</span> and <span>j</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with z and y">Words with <span>z</span> and <span>y</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words with x and v">Words with <span>x</span> and <span>v</span></a>
								</li>
							</ul>
							<div class="word-list-bottom">
								<button class="see-btn" id="show-li-1" type="button"><span>See All</span></button>
							</div>
						</div>
					</div>

					<div class="xs-12 md-6">
						<div class="word-list">
							<div class="word-list-first">
								<h3>
									<a href="#" itemprop="url" title="Words That Start With...">Words That Start With...</a>
								</h3>
							</div>
							<ul class="word-list-urls" id="word-that-start">
								<li class="active">
									<a href="#" itemprop="url" title="Words That Start With q">Words That Start With <span>q</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That Start With x">Words That Start With <span>x</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That Start With z">Words That Start With <span>z</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That Start With a">Words That Start With <span>a</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That Start With e">Words That Start With <span>e</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With b">Words That Start With <span>b</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With c">Words That Start With <span>c</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With d">Words That Start With <span>d</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With f">Words That Start With <span>f</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With g">Words That Start With <span>g</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With h">Words That Start With <span>h</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With i">Words That Start With <span>i</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With j">Words That Start With <span>j</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With k">Words That Start With <span>k</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With l">Words That Start With <span>l</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With m">Words That Start With <span>m</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With n">Words That Start With <span>n</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With o">Words That Start With <span>o</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With p">Words That Start With <span>p</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With r">Words That Start With <span>r</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With s">Words That Start With <span>s</span></a>
								</li class="de-active">
								<li>
									<a href="#" itemprop="url" title="Words That Start With t">Words That Start With <span>t</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With u">Words That Start With <span>u</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With v">Words That Start With <span>v</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With w">Words That Start With <span>w</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That Start With y">Words That Start With <span>y</span></a>
								</li>
							</ul>
							<div class="word-list-bottom">
								<button class="see-btn" id="show-li-2" type="button"><span>See All</span></button>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-6">
						<div class="word-list">
							<div class="word-list-first">
								<h3>
									<a href="#" itemprop="url" title="Words Ending in...">Words Ending in...</a>
								</h3>
							</div>
							<ul class="word-list-urls" id="word-that-end">
								<li class="active">
									<a href="#" itemprop="url" title="Words That End in q">Words That End in <span>q</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That End in j">Words That End in <span>j</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That End in z">Words That End in <span>z</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That End in c">Words That End in <span>c</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words That End in i">Words That End in <span>i</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in a">Words That End in <span>a</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in b">Words That End in <span>b</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in d">Words That End in <span>d</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in e">Words That End in <span>e</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in f">Words That End in <span>f</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in g">Words That End in <span>g</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in h">Words That End in <span>h</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in k">Words That End in <span>k</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in l">Words That End in <span>l</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in m">Words That End in <span>m</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in n">Words That End in <span>n</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in o">Words That End in <span>o</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in p">Words That End in <span>p</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in r">Words That End in <span>r</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in s">Words That End in <span>s</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in t">Words That End in <span>t</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in u">Words That End in <span>u</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in v">Words That End in <span>v</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in w">Words That End in <span>w</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in x">Words That End in <span>x</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="Words That End in y">Words That End in <span>y</span></a>
								</li>
							</ul>
							<div class="word-list-bottom">
								<button class="see-btn" id="show-li-3" type="button"><span>See All</span></button>
							</div>
						</div>
					</div>

					<div class="xs-12 md-6">
						<div class="word-list">
							<div class="word-list-first">
								<h3>
									<a href="#" itemprop="url" title="Words with the Letter...">Words By Length...</a>
								</h3>
							</div>
							<ul class="word-list-urls" id="word-length">
								<li class="active">
									<a href="#" itemprop="url" title="6 letter Words"><span>6 </span>letter Words</a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="7 letter Words"><span>7 </span>letter Words</a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="5 letter Words"><span>5 </span>letter Words</a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="4 letter Words"><span>4 </span>letter Words</a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="3 letter Words"><span>3 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words"><span>2 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="8 letter Words"><span>8 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="9 letter Words"><span>9 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="10 letter Words"><span>10 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="11 letter Words"><span>11 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="12 letter Words"><span>12 </span>letter words</a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="3 letter Words With q"><span>3 </span>letter words<span> q</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With v"><span>2 </span>letter words<span> v</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With q"><span>2 </span>letter words<span> q</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="3 letter Words With z"><span>3 </span>letter words<span> z</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With z"><span>2 </span>letter words<span> z</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="4 letter Words With q"><span>4 </span>letter words<span> q</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With c"><span>2 </span>letter words<span> c</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="4 letter Words With z"><span>4 </span>letter words<span> z</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With u"><span>2 </span>letter words<span> u</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With j"><span>2 </span>letter words<span> j</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="5 letter Words With x"><span>5 </span>letter words<span> x</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="3 letter Words With j"><span>3 </span>letter words<span> j</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="3 letter Words With x"><span>3 </span>letter words<span> x</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="4 letter Words With j"><span>4 </span>letter words<span> j</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="3 letter Words With v"><span>3 </span>letter words<span> v</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="5 letter Words With z"><span>5 </span>letter words<span> z</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="6 letter Words With z"><span>6 </span>letter words<span> z</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="2 letter Words With k"><span>2 </span>letter words<span> k</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="4 letter Words With x"><span>4 </span>letter words<span> x</span></a>
								</li>
								<li class="de-active">
									<a href="#" itemprop="url" title="6 letter Words With x"><span>6 </span>letter words<span> x</span></a>
								</li>
							</ul>
							<div class="word-list-bottom">
								<button class="see-btn" id="show-li-4" type="button"><span>See All</span></button>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="xs-12 md-12">
						<div class="word-list">
							<div class="word-list-first">
								<h3>
									<a href="#" itemprop="url" title="Words Ending in...">Other Lists</a>
								</h3>
							</div>
							<ul class="word-list-urls half">
								<li class="active">
									<a href="#" itemprop="url" title="Words Ending in ING">Words <span>Ending in ING</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Vowel Words"><span>Vowel </span>Words</a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Words with Q Not Followed by U">Words <span>with Q Not Followed by U</span></a>
								</li>
								<li class="active">
									<a href="#" itemprop="url" title="Consonant Words"><span>Consonant </span>Words</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php require_once('include/footer.php'); ?>
