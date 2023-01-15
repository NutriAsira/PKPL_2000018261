from ai_pkg.search import Graph, Problem, Node #NUTRI ASIRA 2000018261
from ai_pkg.utils import random, argmax_random_tie


city_map = Graph(dict(
    Kraton=dict(Kraton=0, Bantul=211, Sewon=82, KotaGede=169, Umbulharjo=81, Pakualaman=99),
    Bantul=dict(Kraton=211, Bantul=0, Sewon=101, KotaGede=152, Umbulharjo=186, Pakualaman=232),
    Sewon=dict(Kraton=82, Bantul=101, Sewon=0, KotaGede=138, Umbulharjo=97, Pakualaman=143),
    KotaGede=dict(Kraton=169, Bantul=152, Sewon=138, KotaGede=0, Umbulharjo=146, Pakualaman=175),
    Umbulharjo=dict(Kraton=81, Bantul=186, Sewon=97, KotaGede=146, Umbulharjo=0, Pakualaman=80),
    Pakualaman=dict(Kraton=99, Bantul=232, Sewon=143, KotaGede=175, Umbulharjo=80, Pakualaman=0)),
    directed=False)

distances = {}

class TSP_problem(Problem):
    def generate_neighbour(self, state):
        neighbour_state = state[:]
        left = random.randint(0, len(neighbour_state) - 1)
        right = random.randint(0, len(neighbour_state) - 1)
        if left > right:
            left, right = right, left
        neighbour_state[left: right + 1] = reversed(neighbour_state[left: right + 1])
        return neighbour_state

    def actions(self, state):
        return [self.generate_neighbour]

    def result(self, state, action):
        return action(state)

    def path_cost(self, state):
        cost = 0
        for i in range(len(state) - 1):
            current_city = state[i]
            next_city = state[i + 1]
            cost += distances[current_city][next_city]
        cost += distances[state[0]][state[-1]]
        return cost

    def value(self, state):
        return -1 * self.path_cost(state)

def hill_climbing(problem):
    def find_neighbors(state, number_of_neighbors=100):
        neighbors = []
        for i in range(number_of_neighbors):
            new_state = problem.generate_neighbour(state)
            if new_state[0] == 'Kraton' and new_state[-1] == 'Pakualaman':
                neighbors.append(Node(new_state))
                state = new_state
        return neighbors

    current = Node(problem.initial)
    while True:
        neighbors = find_neighbors(current.state)
        if not neighbors:
            break
        neighbor = argmax_random_tie(neighbors, key=lambda node:problem.value(node.state))
        if problem.value(neighbor.state) <= problem.value(current.state):
            break
        current.state = neighbor.state
    return current.state

if __name__ =='__main__':
    all_cities = []
    cities_graph = city_map.graph_dict

    for city_1 in cities_graph.keys():
        distances[city_1] = {}
        if(city_1 not in all_cities):
            all_cities.append(city_1)
        for city_2 in cities_graph.keys():
            if(cities_graph.get(city_1).get(city_2) is not None):
                distances[city_1][city_2] = cities_graph.get(city_1).get(city_2)

    tsp_problem = TSP_problem(all_cities)
    result = hill_climbing(tsp_problem)
    print(result)
    cost = tsp_problem.path_cost(result)
    print('cost: ', cost)
