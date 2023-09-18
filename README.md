# Shipment Assignment Program (PHP CLI)

This PHP CLI program assigns shipment destinations to drivers while maximizing the total suitability score based on a predefined algorithm. It reads input from two newline-separated files: `shipment.txt` containing street addresses of shipment destinations and `drivers.txt` containing the names of drivers. The output includes the total suitability score and the matching between shipment destinations and drivers.

## Requirements

- PHP installed on your system
- Two input files: `shipment.txt` and `drivers.txt`

## Usage

1. Place your shipment destinations in a file named `shipment.txt` with each destination on a new line.
2. Place your drivers' names in a file named `drivers.txt` with each name on a new line.

3. Open your terminal or command prompt.

4. Navigate to the directory where the PHP script (`index.php`) is located using the `cd` command.

5. Run the script using the following command:

   ```bash
   php index.php

## Example Output

```Assigned Driver: Everardo Welch, Destination: 215 Osinski Manors, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 9856 Marvin Stravenue, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 7127 Kathlyn Ferry, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 987 Champlin Lake, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 63187 Volkman Garden Suite 447, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 75855 Dessie Lights, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 1797 Adolf Island Apt. 744, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 2431 Lindgren Corners, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 8725 Aufderhar River Suite 859, San Diego, CA 92126
Assigned Driver: Everardo Welch, Destination: 1234 Fake St., San Diego, CA 92126
----------------------------------------------------------------------------------------------------------------------------
Total Suitability Score: 96.25