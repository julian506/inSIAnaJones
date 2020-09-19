<?php
	$image=$_POST['porcentaje'];
	$total=100;
	$actual=$_POST['porcentaje'];
	echo"<center><p>Tienes un avance del $actual %</p></center>";
	if($image==0)
	{
		echo "<img src='/images/fondo.jpg'  border='1' width='344' height='226'>";
	}
	else{
		if($image>=0 && $image<=5)
		{
			echo "<img src='/images/5.jpg'  border='1'";
		}
		else{
			if($image>5 && $image<=10)
			{
				echo "<img src='/images/10.jpg'  border='1' width='344' height='226'>";
			}
			else{
				if($image>10 && $image<=15)
				{
					echo "<img src='/images/15.jpg'  border='1' width='344' height='226'>";
				}
				else{
					if($image>15 && $image<=20)
					{
						echo "<img src='/images/20.jpg'  border='1' width='344' height='226'>";
					}
					else{
						if($image>20 && $image<=25)
						{
							echo "<img src='/images/25.jpg'  border='1' width='344' height='226'>";
						}
						else{
							if($image>25 && $image<=30)
							{
								echo "<img src='/images/30.jpg'  border='1' width='344' height='226'>";
							}
							else{
								if($image>30 && $image<=35)
								{
									echo "<img src='/images/35.jpg'  border='1' width='344' height='226'>";
								}
								else{
									if($image>35 && $image<=40)
									{
										echo "<img src='/images/40.jpg'  border='1' width='344' height='226'>";
									}
									else{
										if($image>40 && $image<=45)
										{
											echo "<img src='/images/45.jpg'  border='1' width='344' height='226'>";
										}
										else{
											if($image>45 && $image<=50)
											{
												echo "<img src='/images/50.jpg'  border='1' width='344' height='226'>";
											}
											else{
												if($image>50 && $image<=55)
												{
													echo "<img src='/images/55.jpg'  border='1' width='344' height='226'>";
												}
												else{
													if($image>55 && $image<=60)
													{
														echo "<img src='/images/60.jpg'  border='1' width='344' height='226'>";
													}
													else{
														if($image>60 && $image<=65)
														{
															echo "<img src='/images/65.jpg'  border='1' width='344' height='226'>";
														}
														else{
															if($image>65 && $image<=70)
															{
																echo "<img src='/images/70.jpg'  border='1' width='344' height='226'>";
															}
															else{
																if($image>70 && $image<=75)
																{
																	echo "<img src='/images/75.jpg'  border='1' width='344' height='226'>";
																}
																else{
																	if($image>75 && $image<=80)
																	{
																		echo "<img src='/images/80.jpg'  border='1' width='344' height='226'>";
																	}
																	else{
																		if($image>80 && $image<=85)
																		{
																			echo "<img src='/images/85.jpg'  border='1' width='344' height='226'>";
																		}
																		else{
																			if($image>85 && $image<=90)
																			{
																				echo "<img src='/images/90.jpg'  border='1' width='344' height='226'>";
																			}
																			else{
																				if($image>90 && $image<=99.99)
																				{
																					echo "<img src='/images/95.jpg'  border='1' width='344' height='226'>";
																				}
																				else{
																					if($image==100)
																					{
																						echo "<img src='/images/100.jpg'  border='1' width='344' height='226'>";
																					}
																					else{
																						echo "Ingrese un porcentaje válido >:v";
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}


?>