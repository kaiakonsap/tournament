<script src="<?=BASE_URL?>assets/js/jquery.combobox.js"></script>
<style>
	.container {
		margin-top: 10px;
	}

	.esContainer {
		background: white;
		padding: 5px;
		border: 1px solid #5CB3FF;
		border-radius: 10px;
	}

	.esItem {
		background: white;
	}

	.esItemHover {
		background: #E3E4FA;
	}

	.esTextBox {
		background: url(<?=BASE_URL?>assets/ico/arrowdown.png) 98% 50% no-repeat;
	}

	input[type="date"]::-webkit-calendar-picker-indicator {
		display: inline-block;
		margin-top: 2%;
		float: right;
	}

	input[type="date"]::-webkit-inner-spin-button {
		display: none;
		-webkit-appearance: none;
		margin: 0;
	}

	.spinner {
		width: 40px;
	}

	.viga {
		background-color: #f2dede !important;
	}

	#tournament-attributes-table td:last-child {
		vertical-align: middle !important;
		text-align: right;
	}

	#tournament-attributes-table input {
		margin-bottom: 0 !important;
	}

	#tournament-attributes-table select {
		margin-bottom: 0 !important;
	}

	#tournament-attributes-table th {
		text-align: left;
		vertical-align: middle;
		padding: 5px;
	}

	#tournament-attributes-table td {
		padding: 5px;

	}

	#participants-table td {
		word-break: break-all;
	}

	.datepicker {
		background: url(<?=BASE_URL?>assets/ico/arrowdown.png) 98% 50% no-repeat;
	}
</style>

<form method="post" id="tournament-add-form">

	<div class="row-fluid">
	<span style="display: inline-block;">
	<div class="span6">
		<h3>Turniiri üldandmed</h3>
		<table id="tournament-attributes-table">
			<tbody>
			<tr>
				<th>Turniiri nimi</th>
				<td><input id="tournament-name" onclick="$(this).removeClass('viga')" type="text"
						   name="tournament[tournament_name]" value="<?=$tournaments['tournament_name']?>"></td>
			</tr>
			<tr>
				<th>Koht</th>
				<td><select name="tournament[place_id]">
					<option value="1">torn</option>
					<option value="2" selected>maja</option>
				</select></td>
			</tr>
			<tr>
				<th>Turniiri algus</th>

				<td><input type="text" class="datepicker" name="tournament[tournament_start]"
						   value="<?=$tournaments['tournament_start']?>"></td>
			</tr>
			<tr>
				<th>Turniiri lõpp</th>
				<td>
					<input type="text" class="datepicker" name="tournament[tournament_end]"
						   value="<?=$tournaments['tournament_end']?>"></td>
			</tr>
			<tr>
				<th>Tüüp:</th>
				<td><select name="tournament[tournament_type]" value="<?=$tournaments['tournament_type']?>">
					<option value="1" <?=$tournaments['tournament_type']==1?'selected="selected"' : ''?>>Alagrupi mängud</option>
					<option value="2" <?=$tournaments['tournament_type']==2?'selected="selected"' : ''?>>Alagrupi mängud +
						playoff</option>
					<option value="3" <?=$tournaments['tournament_type']==3?'selected="selected"' : ''?>>Playoff</option>
				</select></td>
			</tr>
			<tr>
				<th>Kaotajate ring:</th>
				<td><input name="tournament[tournament_loser_bracket]" type="checkbox"
					<?=$tournaments['tournament_loser_bracket']==1?'checked="checked"' : ''?>></td>
			</tr>
			<tr>
				<th>Mängu kestvus</th>
				<td><input class="spinner" min="1" name="tournament[tournament_game_time]"
						   value="<?=$tournaments['tournament_game_time']?>"></td>
			</tr>
			<tr>
				<th>Paus</th>
				<td><input class="spinner" min="1" name="tournament[tournament_game_pause]"
						   value="<?=$tournaments['tournament_game_pause']?>"></td>
			</tr>
			<tr>
				<th>Platside arv</th>
				<td><input class="spinner" min="1" name="tournament[tournament_field]"
						   value="<?=$tournaments['tournament_field']?>"/></td>
			</tr>
			<tr>
				<th>Alagruppe:</th>
				<td><input class="spinner" min="1" name="tournament[tournament_group]"
						   value="<?=$tournaments['tournament_group']?>"/></td>
			</tr>
			<tr>
				<th>Edasipääsejaid:</th>
				<td><input class="spinner" min="1" name="tournament[tournament_win]" value="<?=$tournaments['tournament_win']?>"/>
				</td>
			</tr>
			<tr>
				<th>Võit :</th>
				<td><input class="spinner" min="0" name="tournament[tournament_game_win]"
						   value="<?=$tournaments['tournament_game_win']?>"/></td>
			</tr>
			<tr>
				<th>Viik:</th>
				<td><input class="spinner" min="0" name="tournament[tournament_game_tie]"
						   value="<?=$tournaments['tournament_game_tie']?>"/></td>
			</tr>
			<tr>
				<th>Kaotus :</th>
				<td><input class="spinner" min="0" name="tournament[tournament_game_loss]"
						   value="<?=$tournaments['tournament_game_loss']?>"/></td>
			</tr>
			</tbody>
		</table>

	</div>

	<div class="span6">
		<h3>Osalejad</h3>

		<div style="width: 472px">
			<table id="participants-table" class="table table-bordered table-striped" style="width: 472px !important;">
				<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Meeskonna/mängija nimi
					</th>
					<th>
						instituut
					</th>
					<th title="Vali favoriidiks" style="width: 20px">
						<i class="icon-star"></i>
					</th>
					<th title="Kustuta rida" style="width: 20px">
						<i class="icon-trash"></i>
					</th>
				</tr>
				</thead>
				<tbody>
				<? $i = 1; foreach ($participants as $participant): ?>
				<tr>
					<td>
						<?=$i ++?>
					</td>
					<td>
						<?=$participant['participant_name']?>
					</td>
					<td>
						<?=$participant['institute_name']?>
					</td>
					<td>
						<input type="checkbox">
					</td>
					<td>
						<a href="<?=BASE_URL?>tournaments/remove_participant/<?=$participant['tournament_id']?>"
						   onclick="if (!confirm('Oled kindel?'))return false"><i class="icon-trash">
					</td>
				</tr>
					<? endforeach?>
				</tbody>
			</table>
		</div>
		<!-- add row begins here -->
		 
		<div style="width: 472px">
			<input type="text" class="input-small" placeholder="Võistleja nimi" id="participant_name"
				   style="height:35px"
			  onclick="$(this).removeClass('viga')">
			<select id="institute_name" class="makeEditable" style="height: 35px; width: 203px">
				<option value="">&nbsp;</option>
				<? foreach ($institutes as $institute) : ?>
				<option value="<?= $institute['institute_name'] ?>"><?=$institute['institute_name']?></option>
				<? endforeach?>
			</select>
			<button type="button" class="btn btn-large" onclick="add_participant()" style="margin-left:5px; float: right ">Lisa
				mängija
			</button>
		</div>

		<!-- add row ends here -->

	</div>
	</span>
	</div>

	<div class="row-fluid">
		<div class="span12 text-center">
			<a class="btn btn-large btn-primary" href="<?=BASE_URL?>tournaments">Loobu</a>
			<button class="btn btn-large btn-primary" type="submit">Turniiri eelvaade</button>
			<input type="hidden" id="participants" name="participants">
			<button class="btn btn-large btn-primary" type="button" onclick="convert_table_to_json()">Kinnita</button>

		</div>
	</div>
</form>