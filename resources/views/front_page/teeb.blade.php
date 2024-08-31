<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh Forest Ecosystem Services Valuation</title>
    <link rel="stylesheet" href="{{ asset('assets_contact_about_us/css/landing.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- data table links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" />
</head>

<body>
    <!-- ------------------------------------------------------------ first section ------------------------------------------------------------------  -->

    <x-public_navbar></x-public_navbar>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - first section -->

    <!-- -------------------------------------------------------------------- second section ------------------------------------------------------------- -->

    <section id="second_section" class="img-fluid">
        <x-navbar_before_title></x-navbar_before_title>
        <div class="welcome_part">
            <h1 class="welcome_part_h1"> Biomes and Ecosystems</h1>
        </div>

    </section>

    <!-- ---------------------------------------------------------------------------------------------------------------------------- end -  second section -->

    <!-- ------------------------------------------------------------------- third section ---------------------------------------------------------------- -->

    <section id="third_section">
        <div class="teeb-table">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Biomes and Ecosystems</th>
                        <th>Code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><b style="color:green;">Open sea/ocean</b></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Shelf sea / neritic zone</td>
                        <td>1.1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> Deep sea / Abyssal zone </td>
                        <td>1.2</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> Pelagic zone (up to 200 m deep) </td>
                        <td>1.3</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> Other (sea/ocean) </td>
                        <td>1.4</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td> <b style="color:green;">Coral reefs</b> </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Barrier reefs</td>
                        <td>2.1</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Atolls</td>
                        <td>2.2</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Fringing reefs</td>
                        <td>2.3</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Patch reefs</td>
                        <td>2.4</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Other (coral reefs)</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td> <b style="color:green;">Coastal systems (incl wetlands)</b> </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Sand dunes, beaches, rocky shores</td>
                        <td>3.1</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Tidal marshes</td>
                        <td>3.2</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Salt marshes</td>
                        <td>3.3</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Mangroves</td>
                        <td>3.4</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Lagoons</td>
                        <td>3.5</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Estuaries</td>
                        <td>3.6</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Unvegetated sediBioment</td>
                        <td>3.7</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Shellfish reefs</td>
                        <td>3.8</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Seagrass beds</td>
                        <td>3.9</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Kelp forests</td>
                        <td>3.11</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Other (coastal systems)</td>
                        <td>3.12</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td> <b style="color:green;">Inland wetlands</b> </td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Swamps, marshes</td>
                        <td>4.1</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Peatland, Non-forested</td>
                        <td>4.2</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Peatland, Forested</td>
                        <td>4.3</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>Peatland, Tropical</td>
                        <td>4.4</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Peatland, Boreal</td>
                        <td>4.5</td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>Wetlands, Forested (on alluvial soils)</td>
                        <td>4.6</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>Wetlands, Groundwater-dependent</td>
                        <td>4.7</td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>Floodplains</td>
                        <td>4.8</td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>Other (inland wetlands)</td>
                        <td>4.9</td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td><b style="color:green;">Rivers and lakes</b></td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td>Rivers</td>
                        <td>5.1</td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>Lakes, freshwater</td>
                        <td>5.2</td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>Lakes, saltwater</td>
                        <td>5.3</td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>Human made water bodies</td>
                        <td>5.4</td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td>Other (rivers and lakes)</td>
                        <td>5.5</td>
                    </tr>
                    <tr>
                        <td>40</td>
                        <td><b style="color:green;">Tropical forests</b></td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>Tropical rain forest</td>
                        <td>6.1</td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td>Tropical dry forest</td>
                        <td>6.2</td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>Tropical cloud forests</td>
                        <td>6.3</td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>Other (tropical forests)</td>
                        <td>6.4</td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td><b style="color:green;">Temperate forests</b></td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>Temperate rain or evergreen forest</td>
                        <td>7.1</td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>Temperate deciduous forest</td>
                        <td>7.2</td>
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>Boreal/coniferous forest (‘Taiga’)</td>
                        <td>7.3</td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>Other (temperate forests)</td>
                        <td>7.4</td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td><b style="color:green;">Woodland & Shrubland</b></td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>Tropical wood-& shrublands</td>
                        <td>8.1</td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Mediterranean wood-& shrubland</td>
                        <td>8.2</td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>Temperate wood-& shrubland</td>
                        <td>8.3</td>
                    </tr>
                    <tr>
                        <td>54</td>
                        <td>Heathland</td>
                        <td>8.4</td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>Other (woodland and shrubland)</td>
                        <td>8.5</td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td><b style="color:green;">Grass-/Rangeland</b></td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>Savanna</td>
                        <td>9.1</td>
                    </tr>
                    <tr>
                        <td>58</td>
                        <td>Tropical grasslands</td>
                        <td>9.2</td>
                    </tr>
                    <tr>
                        <td>59</td>
                        <td>Temperate grasslands</td>
                        <td>9.3</td>
                    </tr>
                    <tr>
                        <td>60</td>
                        <td>Steppe (dry, cold grassland)</td>
                        <td>9.4</td>
                    </tr>
                    <tr>
                        <td>61</td>
                        <td>Other (grassland)</td>
                        <td>9.5</td>
                    </tr>
                    <tr>
                        <td>62</td>
                        <td><b style="color:green;">Desert</b></td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>63</td>
                        <td>True desert (sand/rock/salt)</td>
                        <td>10.1</td>
                    </tr>
                    <tr>
                        <td>64</td>
                        <td>Semi-desert</td>
                        <td>10.2</td>
                    </tr>
                    <tr>
                        <td>65</td>
                        <td>Other (desert)</td>
                        <td>10.3</td>
                    </tr>
                    <tr>
                        <td>66</td>
                        <td><b style="color:green;">Tundra</b></td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>67</td>
                        <td>Alpine Tundra</td>
                        <td>11.1</td>
                    </tr>
                    <tr>
                        <td>68</td>
                        <td>Arctic Tundra</td>
                        <td>11.2</td>
                    </tr>
                    <tr>
                        <td>69</td>
                        <td>Other (tundra)</td>
                        <td>11.3</td>
                    </tr>
                    <tr>
                        <td>70</td>
                        <td><b style="color:green;">High mountain & Polar systems</b></td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>71</td>
                        <td>High Mountain - forest</td>
                        <td>12.1</td>
                    </tr>
                    <tr>
                        <td>72</td>
                        <td>High Mountain - grassland</td>
                        <td>12.2</td>
                    </tr>
                    <tr>
                        <td>73</td>
                        <td>High Mountain - snow and ice</td>
                        <td>12.3</td>
                    </tr>
                    <tr>
                        <td>74</td>
                        <td>Polar</td>
                        <td>12.4</td>
                    </tr>
                    <tr>
                        <td>75</td>
                        <td>Other (high mountains and polar)</td>
                        <td>12.5</td>
                    </tr>
                    <tr>
                        <td>76</td>
                        <td><b style="color:green;">Inland Un- or Sparsely Vegetated</b></td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>77</td>
                        <td>Underground systems</td>
                        <td>13.1</td>
                    </tr>
                    <tr>
                        <td>78</td>
                        <td>Inland rock formations</td>
                        <td>13.2</td>
                    </tr>
                    <tr>
                        <td>79</td>
                        <td>Other (inland un- or sparsely vegetated)</td>
                        <td>13.3</td>
                    </tr>
                    <tr>
                        <td>80</td>
                        <td><b style="color:green;">Cultivated areas</b></td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>81</td>
                        <td>Cropland (arable land)</td>
                        <td>14.1</td>
                    </tr>
                    <tr>
                        <td>82</td>
                        <td>Pastures</td>
                        <td>14.2</td>
                    </tr>
                    <tr>
                        <td>83</td>
                        <td>Orchards/agro-forestry</td>
                        <td>14.3</td>
                    </tr>
                    <tr>
                        <td>84</td>
                        <td>Plantations</td>
                        <td>14.4</td>
                    </tr>
                    <tr>
                        <td>85</td>
                        <td>Rice paddies, etc</td>
                        <td>14.5</td>
                    </tr>
                    <tr>
                        <td>86</td>
                        <td>Aquaculture</td>
                        <td>14.6</td>
                    </tr>
                    <tr>
                        <td>87</td>
                        <td>Small landscape elements</td>
                        <td>14.7</td>
                    </tr>
                    <tr>
                        <td>88</td>
                        <td>Other (cultivated areas)</td>
                        <td>14.8</td>
                    </tr>
                    <tr>
                        <td>89</td>
                        <td><b style="color:green;">Urban Green and Blue Infrastructure</b></td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>90</td>
                        <td>Urban Parks & Forests</td>
                        <td>15.1</td>
                    </tr>
                    <tr>
                        <td>91</td>
                        <td>Lawns, sports fields, golf courses</td>
                        <td>15.2</td>
                    </tr>
                    <tr>
                        <td>92</td>
                        <td>Urban lakes, ponds, wetlands</td>
                        <td>15.3</td>
                    </tr>
                    <tr>
                        <td>93</td>
                        <td>Cultivated areas</td>
                        <td>15.4</td>
                    </tr>
                    <tr>
                        <td>94</td>
                        <td>(Street) Trees & Shrubs</td>
                        <td>15.5</td>
                    </tr>
                    <tr>
                        <td>95</td>
                        <td>Other (urban green-blue)</td>
                        <td>15.6</td>
                    </tr>
                    <tr>
                        <td>96</td>
                        <td><b style="color:green;">Other</b></td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>97</td>
                        <td>Other</td>
                        <td>16.1</td>
                    </tr>
                </tbody>
            </table>

            <p>Source: TEEB Valuation Database</p>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------------------------------------------------------------- end - third section  -->



    <!-- ------------------------------------------------------------------- sixth section ---------------------------------------------------------------- -->

    <br />
    <x-public_footer></x-public_footer>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ end - sixth section -->

    <!-- datatable script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>
    <!-- datatable script end -->
</body>

</html>
