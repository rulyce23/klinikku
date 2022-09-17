<?php
	Yii::import('zii.widgets.grid.CGridView');

	/**
	* @author Hafid Mukhlasin
	* @license MIT License
	* @version 1.0
	*/	
	class EPdfFactoryHeart extends CGridView
	{
		
		//Document properties
		public $creator = 'Hafid Mukhlasin';
		public $title = null;

		//the PDF object
		public $pdf = null;

		public $disablePaging = true;


		public function init()
		{
			$this->pdf=Yii::app()->pdfFactory->getTCPDF(); 
			$this->pdf->SetCreator(PDF_CREATOR);
			$this->pdf->SetAuthor('YiiHeart');
			$this->title = $this->title ? $this->title : Yii::app()->getController()->getPageTitle();
			$this->initColumns();
		}

		public function renderHeader()
		{
			// HEADER DATA
			$tr = '<tr style="background-color:#ddd;font-weight:bold;">';
			$a=0;
			foreach($this->columns as $column)
			{
				$a=$a+1;
				if($column instanceof CButtonColumn)
					$head = $column->header;
				elseif($column->header===null && $column->name!==null)
				{
					if($column->grid->dataProvider instanceof CActiveDataProvider)
						$head = $column->grid->dataProvider->model->getAttributeLabel($column->name);
					else
						$head = $column->name;
				} else
					$head =trim($column->header)!=='' ? $column->header : $column->grid->blankDisplay;

				$width="";
				if($head=="No")	$width='30px';
				$tr.=$this->row(strip_tags($head),$width,"center");
				
			}

			$tr.="</tr>";
			return $tr;		
		}

		public function renderBody()
		{
			// DATA
			$this->pdf->SetFont('helvetica', '', 9);
			ob_start();
			echo '<table cellspacing="0" cellpadding="1" border="1" style="width:100%">';
			echo $this->renderHeader();			
			if($this->disablePaging) //if needed disable paging to export all data
				$this->dataProvider->pagination = false;

			$data=$this->dataProvider->getData();
			$n=count($data);

			if($n>0)
			{
				for($row=0;$row<$n;++$row)
					echo $this->renderRow($row);
			}

			echo '</table>';
			$table = ob_get_contents();
			//exit;
			ob_end_clean();			

			$this->pdf->writeHTML($table, true, false, false, false, '');	
		}

		public function renderRow($row)
		{
			$bgcolor="";
			if($row%2==0) $bgcolor="#eee";
			$tr='<tr style="background-color:'.$bgcolor.';">';			
			$data=$this->dataProvider->getData();		

			$a=0;
			foreach($this->columns as $n=>$column)
			{
				$value="";
				if($column instanceof CLinkColumn)
				{
					if($column->labelExpression!==null)
						$value=$column->evaluateExpression($column->labelExpression,array('data'=>$data[$row],'row'=>$row));
					else
						$value=$column->label;
				} elseif($column instanceof CButtonColumn)
					$value = ""; //Dont know what to do with buttons
				elseif($column->value=="autonumber") {
					$value=$row+1;					
				}
				elseif($column->value!==null) 
					$value=$this->evaluateExpression($column->value ,array('data'=>$data[$row]));
				elseif($column->name!==null) { 
					$value=$data[$row][$column->name];
					$value= CHtml::value($data[$row], $column->name);
				    $value=$value===null ? "" : $column->grid->getFormatter()->format($value,'raw');
                }             

				$a++;
				$tr.=$this->row(strip_tags($value));
			}
			$tr.="</tr>";
			return $tr;				
		}

		public function row($value="",$width="",$align="left"){
	    	$row  = '<td ';
	    	
	    	$row .= 'style="';
	    	$row .= (!empty($width))?'width:'.$width.';':'';
	    	$row .= (!empty($align))?'text-align:'.$align.';':'';
	    	$row .= '"';

	    	$row .= '>';
	    	$row .= $value;
	    	$row .= '</td>';
	    	return $row;
	    } 		

		public function run()
		{
			$this->pdf->addPage();
			// TITLE
			$this->pdf->SetFont('helvetica', 'B', 16);
			$this->pdf->Write(0, 'List of Employees', '', 0, 'L', true, 0, false, false, 0);
			$this->pdf->Ln(3);
			$this->renderBody();
			$this->pdf->Output();			
		}



	}